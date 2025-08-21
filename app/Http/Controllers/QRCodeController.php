<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function generate(Request $request)
    {
        $validated = $request->validate([
            'text' => ['required','string','max:2000'],
            'size' => ['nullable','integer','min:100','max:1000'],
            'margin' => ['nullable','integer','min:0','max:20'],
            'format' => ['nullable','in:png,svg'],
            'fg' => ['nullable','regex:/^#?[0-9a-fA-F]{6}$/'],
            'bg' => ['nullable','regex:/^#?[0-9a-fA-F]{6}$/'],
            'ecc' => ['nullable','in:L,M,Q,H'],
            'logo' => ['nullable','file','mimes:png,jpg,jpeg,webp','max:2048'],
        ]);

        $text = $validated['text'];
        $size = (int)($validated['size'] ?? 300);
        $margin = (int)($validated['margin'] ?? 1);
        $format = $validated['format'] ?? 'png';
        $foreground = ltrim($validated['fg'] ?? '#000000', '#');
        $background = ltrim($validated['bg'] ?? '#ffffff', '#');
        $ecc = $validated['ecc'] ?? 'M';

        // If a logo is uploaded, force PNG since we will rasterize and merge
        $hasLogo = $request->hasFile('logo');
        if ($hasLogo) {
            $format = 'png';
        }

        // Build QR code
        $qr = QrCode::format($format)
            ->size($size)
            ->margin($margin)
            ->errorCorrection($ecc)
            ->color(
                hexdec(substr($foreground, 0, 2)),
                hexdec(substr($foreground, 2, 2)),
                hexdec(substr($foreground, 4, 2))
            )
            ->backgroundColor(
                hexdec(substr($background, 0, 2)),
                hexdec(substr($background, 2, 2)),
                hexdec(substr($background, 4, 2))
            );

        // Merge uploaded logo in center for PNG (apply round mask)
        $roundedTempPath = null;
        if ($hasLogo && $format === 'png') {
            $logoPath = $request->file('logo')->getRealPath();
            $roundedTempPath = $this->createRoundedPng($logoPath, min(512, $size));
            $mergePath = $roundedTempPath ?: $logoPath;
            // Use ~25% of QR size; adjust if needed
            $qr->merge($mergePath, 0.25, true);
        }

        $binary = $qr->generate($text);

        if ($format === 'svg') {
            return response()->json([
                'format' => 'svg',
                'dataUrl' => 'data:image/svg+xml;base64,' . base64_encode($binary),
            ]);
        }

        // Cleanup temp rounded logo if created
        if ($roundedTempPath && is_file($roundedTempPath)) {
            @unlink($roundedTempPath);
        }

        return response()->json([
            'format' => 'png',
            'dataUrl' => 'data:image/png;base64,' . base64_encode($binary),
        ]);
    }

    /**
     * Create a rounded PNG from an image file path using GD.
     * Returns path to temporary PNG or null on failure.
     */
    private function createRoundedPng(string $filePath, int $maxSize = 512): ?string
    {
        if (!function_exists('imagecreatetruecolor')) {
            return null;
        }
        $raw = @file_get_contents($filePath);
        if ($raw === false) {
            return null;
        }
        $src = @imagecreatefromstring($raw);
        if ($src === false) {
            return null;
        }
        $srcW = imagesx($src);
        $srcH = imagesy($src);
        if ($srcW <= 0 || $srcH <= 0) {
            imagedestroy($src);
            return null;
        }
        $side = min($srcW, $srcH);
        $dstSize = min($side, max(64, $maxSize));
        $offsetX = (int) floor(($srcW - $side) / 2);
        $offsetY = (int) floor(($srcH - $side) / 2);

        $square = imagecreatetruecolor($dstSize, $dstSize);
        imagesavealpha($square, true);
        $transparent = imagecolorallocatealpha($square, 0, 0, 0, 127);
        imagefill($square, 0, 0, $transparent);

        imagecopyresampled($square, $src, 0, 0, $offsetX, $offsetY, $dstSize, $dstSize, $side, $side);

        $center = $dstSize / 2.0;
        $radius = $dstSize / 2.0;
        for ($y = 0; $y < $dstSize; $y++) {
            for ($x = 0; $x < $dstSize; $x++) {
                $dx = ($x + 0.5) - $center;
                $dy = ($y + 0.5) - $center;
                if (($dx * $dx + $dy * $dy) > ($radius * $radius)) {
                    $rgba = imagecolorat($square, $x, $y);
                    $colors = imagecolorsforindex($square, $rgba);
                    $alphaColor = imagecolorallocatealpha($square, $colors['red'], $colors['green'], $colors['blue'], 127);
                    imagesetpixel($square, $x, $y, $alphaColor);
                }
            }
        }

        // Create output with 100% radius circular border (ring)
        $output = imagecreatetruecolor($dstSize, $dstSize);
        imagesavealpha($output, true);
        $transparentOut = imagecolorallocatealpha($output, 0, 0, 0, 127);
        imagefill($output, 0, 0, $transparentOut);

        // Draw border circle (white) filling full canvas
        $white = imagecolorallocatealpha($output, 255, 255, 255, 0);
        imagefilledellipse($output, (int)floor($dstSize / 2), (int)floor($dstSize / 2), $dstSize, $dstSize, $white);

        // Paste the masked logo slightly inset to reveal border ring
        $border = max(2, (int)round($dstSize * 0.06));
        $innerSize = max(2, $dstSize - 2 * $border);
        imagecopyresampled($output, $square, $border, $border, 0, 0, $innerSize, $innerSize, $dstSize, $dstSize);

        $tmpPath = sys_get_temp_dir() . DIRECTORY_SEPARATOR . 'rounded_logo_' . uniqid('', true) . '.png';
        imagesavealpha($output, true);
        imagepng($output, $tmpPath);
        imagedestroy($output);
        imagedestroy($square);
        imagedestroy($src);
        return is_file($tmpPath) ? $tmpPath : null;
    }
}


