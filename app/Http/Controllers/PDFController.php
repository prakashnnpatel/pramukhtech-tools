<?php

namespace App\Http\Controllers;

use PDF;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function mergeImagesToPdf(Request $request)
    {
        $request->validate([
            'images'   => 'required|array',
            'images.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,bmp,tiff|max:51200', // max 50MB each
        ]);
        
        $images = $request->file('images');
        $layout_option = $request->layout ?? 'new_page';
        $html = '';

        foreach ($images as $image) {
            $base64 = base64_encode(file_get_contents($image->getRealPath()));
            $mime = $image->getMimeType();

            if($layout_option == "new_page") {
                // Each image on a new page
                $html .= '<div style="page-break-after: always; text-align:center;">
                        <img src="data:'.$mime.';base64,'.$base64.'" style="max-width:100%; max-height:100%;">
                      </div>';
            } else {
                $html .= '<div style="text-align:center; margin: 10px 0;">';
                $html .= '<img src="data:'.$mime.';base64,'.$base64.'" 
                            style="display:inline-block; margin:5px; max-width:45%; height:auto; border:1px solid #ddd; border-radius:6px;">';
                $html .= '</div>';
            }
        }
        $pdf = PDF::loadHTML($html)->setPaper('a4', 'portrait');
        return $pdf->download('merged-images.pdf');
    }
}