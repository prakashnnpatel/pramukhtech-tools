<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use setasign\Fpdi\Fpdi;

class SplitPdfController extends Controller
{
    public function split(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf',
            'pages' => 'required|string', // e.g. "1,2,3"
        ]);

        $pdfFile = $request->file('pdf');
        $pagesRaw = $request->input('pages');
        $pdf = new Fpdi();
        $pageCount = $pdf->setSourceFile($pdfFile->getPathname());
        $pages = array_map('intval', explode(',', $pagesRaw));
        $validPages = array_filter($pages, function($p) use ($pageCount) {
            return $p > 0 && $p <= $pageCount;
        });
        $invalidPages = array_diff($pages, $validPages);
        if (empty($validPages)) {
            return response()->json(['error' => 'No valid page numbers. Please enter numbers between 1 and ' . $pageCount . '.'], 422);
        }
        if (!empty($invalidPages)) {
            return response()->json(['error' => 'Invalid page numbers: ' . implode(', ', $invalidPages) . '. Please enter numbers between 1 and ' . $pageCount . '.'], 422);
        }

        $outputPdf = new Fpdi();
        $outputPdf->setSourceFile($pdfFile->getPathname());
        foreach ($validPages as $pageNo) {
            $outputPdf->AddPage();
            $tplIdx = $outputPdf->importPage($pageNo);
            $outputPdf->useTemplate($tplIdx);
        }

        $fileName = config('constants.downloadfile_prefix').'-split-pdf-' . time() . '.pdf';
        $outputPath = storage_path('app/'. $fileName);
        $outputPdf->Output($outputPath, 'F');

        return response()->download($outputPath)->deleteFileAfterSend(true);
    }
}
