<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;

class ToolsController extends Controller
{
    // Show the crop image tool UI
    public function cropImage()
    {
        return view('tools.crop-image');
    }

    // Handle the image cropping POST request
    public function cropImagePost(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp',
            'crop_x' => 'required|numeric',
            'crop_y' => 'required|numeric',
            'crop_width' => 'required|numeric',
            'crop_height' => 'required|numeric',
        ]);

        $image = $request->file('image');
        $x = (int) $request->input('crop_x');
        $y = (int) $request->input('crop_y');
        $width = (int) $request->input('crop_width');
        $height = (int) $request->input('crop_height');

        $img = imagecreatefromstring(file_get_contents($image->getRealPath()));
        $cropped = imagecrop($img, ['x' => $x, 'y' => $y, 'width' => $width, 'height' => $height]);

        ob_start();
        imagepng($cropped);
        $croppedData = ob_get_clean();
        imagedestroy($img);
        imagedestroy($cropped);

        return Response::make($croppedData, 200, [
            'Content-Type' => 'image/png',
            'Content-Disposition' => 'attachment; filename="cropped-image.png"',
        ]);
    }
}
