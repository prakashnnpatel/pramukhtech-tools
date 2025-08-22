<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Lead;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view("home", ["toolKey" => "toollist"]);
    }

    public function aboutUs()
    {
        return view("about-us");
    }

    public function toolList($category = null)
    {
        $tools = [
            ['key' => 'fd-calculator', 'icon' => 'fas fa-piggy-bank', 'title' => 'FD Calculator', 'desc' => 'Calculate Fixed Deposit returns with ease', 'category' => 'calculators'],
            ['key' => 'sip-calculator', 'icon' => 'fas fa-hand-holding-water', 'title' => 'SIP Calculator', 'desc' => 'Plan your Systematic Investment Plan', 'category' => 'calculators'],
            ['key' => 'emi-calculator', 'icon' => 'fas fa-calculator', 'title' => 'EMI Calculator', 'desc' => 'Calculate Equated Monthly Installments', 'category' => 'calculators'],
            ['key' => 'custom-invoice', 'icon' => 'fas fa-file-invoice', 'title' => 'Custom Invoice', 'desc' => 'Create professional invoices and download as PDF', 'category' => 'documents'],
            ['key' => 'generate-quote', 'icon' => 'fas fa-file-contract', 'title' => 'Generate Quote', 'desc' => 'Create branded quotes and download as PDF', 'category' => 'documents'],
            ['key' => 'purchase-order', 'icon' => 'fas fa-shopping-cart', 'title' => 'Purchase Order', 'desc' => 'Generate purchase orders and download as PDF', 'category' => 'documents'],
            ['key' => 'digital-document', 'icon' => 'fas fa-file', 'title' => 'Digital Document', 'desc' => 'Create documents and download as PDF', 'category' => 'documents'],
            ['key' => 'word-counter', 'icon' => 'fa-solid fa-font', 'title' => 'Word Counter', 'desc' => 'Count words, characters, sentences & paragraphs', 'category' => 'documents'],
            ['key' => 'merge-images-to-pdf', 'icon' => 'fa-solid fa-file-pdf', 'title' => 'Merge Images Into PDF', 'desc' => 'Combine images into a single PDF', 'category' => 'documents'],
            ['key' => 'currency-converter', 'icon' => 'fas fa-exchange-alt', 'title' => 'Currency Converter', 'desc' => 'Real-time exchange rates and conversions', 'category' => 'utilities'],
            ['key' => 'timezone', 'icon' => 'fas fa-clock', 'title' => 'Timezone Converter', 'desc' => 'Convert between timezones quickly', 'category' => 'utilities'],
            ['key' => 'signature', 'icon' => 'fa-solid fa-pen', 'title' => 'Digital Signature', 'desc' => 'Create your digital signature in seconds', 'category' => 'utilities'],
            ['key' => 'screen-recording', 'icon' => 'fa-solid fa-desktop', 'title' => 'Screen Recorder', 'desc' => 'Record your screen with audio', 'category' => 'utilities'],
            ['key' => 'color-picker', 'icon' => 'fa-solid fa-palette', 'title' => 'Color Picker', 'desc' => 'Pick and convert colors easily', 'category' => 'utilities'],
            ['key' => 'qr-code-generator', 'icon' => 'fa-solid fa-qrcode', 'title' => 'QR Code Generator', 'desc' => 'Create customizable QR codes', 'category' => 'utilities'],
            ['key' => 'barcode-sticker-generator', 'icon' => 'fas fa-barcode', 'title' => 'Barcode Sticker Generator', 'desc' => 'Generate up to 50 barcode stickers and download PDF', 'category' => 'utilities'],
            ['key' => 'unicode-text-converter', 'icon' => 'fa-solid fa-language', 'title' => 'Unicode Text Converter', 'desc' => 'Generate fancy Unicode styles and copy easily', 'category' => 'utilities'],
        ];
        if (!empty($category)) {
            $category = strtolower($category);
            $tools = array_values(array_filter($tools, function($t) use ($category) {
                return isset($t['category']) && $t['category'] === $category;
            }));
        }
        return view('tools.list', compact('tools', 'category'));
    }

    public function contactUs()
    {
        return view("contact-us");
    }

    public function tools($toolkey = "toollist", $subpart = "")
    {
		if($toolkey == "invoice-generator") {
			$toolkey = "custom-invoice";
		}

		$extraParams = [];
		if(!empty($subpart) && $toolkey == "timezone")
		{
			$extraParams = explode("-to-",$subpart);
		}
		try {
			return view("tools.index", ["toolKey" => $toolkey, "extraParams" => $extraParams]);
		}
		catch(Exception $e) {
			return response()->view('errors.404', [], 404);
		}
    }

	public function sitemap() {
		return response()->view('sitemap')->header('Content-Type', 'text/xml');
	}

    public function generateInvoice(Request $request)
    {
        $param = $request->all();
        /* Create PDF */
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 0);

        $path = "uploads/pdf/";
        $this->checkDir($path);

        $fileName = "order_invoice_".time().".pdf";
        $pdfName = $path."/".$fileName;
        
		if(!empty($param['currency']))
			$param['currencySymbol'] = config('constants.currencies')[$param['currency']];

        /* Write PDF */
        try 
        {
            if($param['flag'] == "pdf")
            {
				$content = PDF::loadView('invoice-print', ['param' => $param])->setPaper('A4', 'portrait')->output();
                file_put_contents($pdfName, $content);
                return url("uploads/pdf/".$fileName);
            }
            else {
                 return view('invoice-print', ['param'=>$param]);
            }           
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

    public function digitalDocument(Request $request)
    {
        $param = $request->all();
        /* Create PDF */
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 0);

        $path = "uploads/documents/";
        $this->checkDir($path);

        $fileName = "digitaldocument_".time().".pdf";
        $pdfName = $path."/".$fileName;

        /* Write PDF */
        try
        {
            if($param['flag'] == "pdf")
            {
                $content = PDF::loadView('digital-document-print', ['param' => $param])->output();
                file_put_contents($pdfName, $content);
                return url("uploads/documents/".$fileName);
            }
            else {
                 return view('digital-document-print', ['param'=>$param]);
            }           
        }
        catch(Exception $e) {
            echo 'Message: ' .$e->getMessage();
        }
    }

    public function checkDir($path)
	{
		if(!is_dir($path)) {
			mkdir($path);
			chmod($path, 0775);
		}
	}

    /***Contactus Form Submited */
    public function contactUsSubmit(Request $request)
    {
        $request->validate([
			'name' => ['required','string'],
			"email" => ["required","email"],
            "subject" => ["required","string"],
            "message" => ["required"],
		]);

        $savelead = Lead::create($request->all());
        if($savelead) {
            return response()->json(['data' => 1], 200);
        }
        return response()->json(["message" => "Please insert valid data"], 403);
    }

    public function generateBarcodeStickers(Request $request)
    {
        try {
            $request->validate([
                'barcodeType' => 'required|string',
                'barcodeWidth' => 'required|numeric|min:20|max:100',
                'barcodeHeight' => 'required|numeric|min:10|max:50',
                'showText' => 'required|in:0,1',
                'textSize' => 'required|numeric|min:6|max:20',
                'barcodeData' => 'required|string',
                'rowsPerPage' => 'required|numeric|min:1|max:20',
                'columnsPerPage' => 'required|numeric|min:1|max:10',
            ]);

            $barcodeData = array_filter(explode("\n", $request->barcodeData), function($line) {
                return trim($line) !== '';
            });

            if (empty($barcodeData)) {
                return response()->json(['success' => false, 'message' => 'No valid barcode data provided.'], 400);
            }

            if (count($barcodeData) > 50) {
                return response()->json(['success' => false, 'message' => 'Maximum 50 barcodes allowed.'], 400);
            }

            // Validate barcode format based on type
            foreach ($barcodeData as $index => $data) {
                if (!$this->validateBarcodeFormat($data, $request->barcodeType)) {
                    return response()->json([
                        'success' => false,
                        'message' => "Invalid format for barcode " . ($index + 1) . ": \"$data\""
                    ], 400);
                }
            }

            // Create barcode images using Picqer
            $barcodes = [];
            $previewBarcodes = [];
            
            foreach ($barcodeData as $data) {
                $cleanData = trim($data);
                $barcodeImage = $this->generateBarcodeImage($cleanData, $request->barcodeType, (float)$request->barcodeWidth, (float)$request->barcodeHeight);
                
                $barcodes[] = [
                    'data' => $cleanData,
                    'image' => $barcodeImage
                ];

                if (count($previewBarcodes) < 6) {
                    $previewBarcodes[] = [
                        'data' => $cleanData,
                        'image' => $barcodeImage
                    ];
                }
            }

            // Generate PDF
            $pdfUrl = $this->generateBarcodePDF($barcodes, $request->all());

            return response()->json([
                'success' => true,
                'barcodes' => $barcodes,
                'preview' => $previewBarcodes,
                'barcodeCount' => count($barcodes),
                'pageCount' => ceil(count($barcodes) / ($request->rowsPerPage * $request->columnsPerPage)),
                'pdfUrl' => $pdfUrl
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while generating barcodes: ' . $e->getMessage()
            ], 500);
        }
    }

    private function validateBarcodeFormat($data, $type)
    {
        $cleanData = preg_replace('/[^0-9A-Za-z]/', '', $data);
        
        switch($type) {
            case 'EAN13':
                return (bool) preg_match('/^\d{13}$/', $cleanData);
            case 'EAN8':
                return (bool) preg_match('/^\d{8}$/', $cleanData);
            case 'UPC': // Treat as UPC-A (12 digits)
                return (bool) preg_match('/^\d{12}$/', $cleanData);
            case 'UPCE':
                return (bool) preg_match('/^\d{8}$/', $cleanData);
            case 'CODE39':
                return (bool) preg_match('/^[0-9A-Z\-\.\/\+\s]+$/', $data);
            case 'CODE128':
                return (bool) preg_match('/^[\x00-\x7F]+$/', $data);
            default:
                return true;
        }
    }

    private function mapBarcodeTypeConstant(string $type)
    {
        // Map UI type values to Picqer constants
        switch (strtoupper($type)) {
            case 'CODE128':
                return \Picqer\Barcode\BarcodeGenerator::TYPE_CODE_128;
            case 'CODE39':
                return \Picqer\Barcode\BarcodeGenerator::TYPE_CODE_39;
            case 'EAN13':
                return \Picqer\Barcode\BarcodeGenerator::TYPE_EAN_13;
            case 'EAN8':
                return \Picqer\Barcode\BarcodeGenerator::TYPE_EAN_8;
            case 'UPC':
                return \Picqer\Barcode\BarcodeGenerator::TYPE_UPC_A;
            case 'UPCE':
                return \Picqer\Barcode\BarcodeGenerator::TYPE_UPC_E;
            default:
                return \Picqer\Barcode\BarcodeGenerator::TYPE_CODE_128;
        }
    }

    private function generateBarcodeImage($data, $type, $widthMm, $heightMm)
    {
        // Convert desired physical size to pixels (approx 96dpi => 1mm ≈ 3.78px)
        $heightPx = (int) round(((float) $heightMm) * 3.78);
        $widthFactor = max(1, min(6, (int) round(((float) $widthMm) / 10)));

        $typeConst = $this->mapBarcodeTypeConstant($type);

        // Generate PNG barcode
        $generator = new \Picqer\Barcode\BarcodeGeneratorPNG();
        $pngBinary = $generator->getBarcode($data, $typeConst, $widthFactor, $heightPx);

        return 'data:image/png;base64,' . base64_encode($pngBinary);
    }

    private function generateBarcodePDF($barcodes, $settings)
    {
        ini_set('memory_limit', '-1');
        ini_set('max_execution_time', 0);

        $path = "uploads/barcodes/";
        $this->checkDir($path);

        $fileName = "barcode_stickers_" . time() . ".pdf";
        $pdfName = $path . "/" . $fileName;

        try {
            $pdfData = [
                'barcodes' => $barcodes,
                'settings' => $settings,
                'rowsPerPage' => $settings['rowsPerPage'],
                'columnsPerPage' => $settings['columnsPerPage'],
                'showText' => $settings['showText'],
                'textSize' => $settings['textSize']
            ];

            $content = PDF::loadView('barcode-sticker-print', $pdfData)
                         ->setPaper('A4', 'portrait')
                         ->output();
            
            file_put_contents($pdfName, $content);
            return url("uploads/barcodes/" . $fileName);
            
        } catch (\Exception $e) {
            throw new \Exception('Failed to generate PDF: ' . $e->getMessage());
        }
    }
}