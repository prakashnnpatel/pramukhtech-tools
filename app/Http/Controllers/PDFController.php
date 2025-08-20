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

		if($layout_option == "new_page") {
			foreach ($images as $image) {
				$base64 = base64_encode(file_get_contents($image->getRealPath()));
				$mime = $image->getMimeType();
				// Each image on a new page
				$html .= '<div style="page-break-after: always; text-align:center;">
						<img src="data:'.$mime.';base64,'.$base64.'" style="max-width:100%; max-height:100%;">
					  </div>';
			}
		} else {
			$html .= '<table width="100%" cellpadding="5" cellspacing="0" 
           style="text-align:center; border-collapse:collapse; table-layout:fixed;">';

			foreach ($images as $index => $image) {
				$base64 = base64_encode(file_get_contents($image->getRealPath()));
				$mime   = $image->getMimeType();

				// Start new row for even index
				if (($index+1) % 2 == 0) {
					$html .= '<tr>';
				}

				$html .= '<td width="50%" style="text-align:center; vertical-align:middle;">
							<img src="data:'.$mime.';base64,'.$base64.'" 
								 style="max-width:100%; max-height:300px; object-fit:contain; 
										border:1px solid #ddd; border-radius:10px; display:block; margin:auto;">
						  </td>';

				// Close row after 2 images
				if (($index+1) % 2 == 1) {
					$html .= '</tr>';
				}
			}

			// If odd number of images, close row with empty td
			if (count($images) % 2 != 0) {
				$html .= '<td width="50%"></td></tr>';
			}
			$html .= '</table>';
		}
        $pdf = PDF::loadHTML($html)->setPaper('a4', 'portrait');
        return $pdf->download('merged-images.pdf');
    }
}