<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Lead;
use Illuminate\Http\Request;
use App\Models\Tools;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function home()
    {
		$totalTools = Tools::count();
        $feactureToolListArr = [
            "financial" => [
                [
                    "title" => "FD Calculator",
                    "seo_title" => "Free Online FD Calculator, Calculate Fixed Deposit Returns",
                    "description" => "Calculate Fixed Deposit returns with ease",
                    "icon" => "fas fa-piggy-bank",
                    "link" => route('toollist', 'fd-calculator')
                ],
                [
                    "title" => "SIP Calculator",
                    "seo_title" => "Free SIP Calculator, Plan Your Systematic Investment Easily",
                    "description" => "Plan your Systematic Investment Plan",
                    "icon" => "fas fa-hand-holding-water",
                    "link" => route('toollist', 'sip-calculator')
                ],
                [
                    "title" => "EMI Calculator",
                    "seo_title" => "Free EMI Calculator, Calculate Loan EMIs Instantly",
                    "description" => "Calculate Equated Monthly Installments",
                    "icon" => "fas fa-calculator",
                    "link" => route('toollist', 'emi-calculator')
                ],
                [
                    "title" => "RD Calculator",
                    "seo_title" => "Free RD Calculator, Calculate RD Instantly",
                    "description" => "RD Calculator, Calculate RD Instantly",
                    "icon" => "fas fa-calculator",
                    "link" => route('toollist', 'rd-calculator')
                ],
                [
                    "title" => "PPF Calculator",
                    "seo_title" => "Free PPF Calculator, Calculate PPF Returns Instantly",
                    "description" => "PPF Calculator, PPF Returns Instantly",
                    "icon" => "fas fa-calculator",
                    "link" => route('toollist', 'ppf-calculator')
                ]
            ],
            "documents" => [
                [
                    "title" => "Custom Invoice",
                    "seo_title" => "Create Free Custom Invoice Online",
                    "description" => "Create professional invoices instantly",
                    "icon" => "fa-solid fa-file-pdf",
                    "link" => route('toollist', 'custom-invoice')
                ],               
                [
                    "title" => "Generate Quote",
                    "seo_title" => "Generate Free Online Quotes Easily",
                    "description" => "Create detailed quotes for your business",
                    "icon" => "fa-solid fa-file-pdf",
                    "link" => route('toollist', 'generate-quote')
                ],
                [
                    "title" => "Purchase Order",
                    "seo_title" => "Create Free Purchase Orders Online",
                    "description" => "Generate purchase orders quickly",
                    "icon" => "fa-solid fa-file-pdf",
                    "link" => route('toollist', 'purchase-order')
                ],
                [
                    "title" => "Digital Document",
                    "seo_title" => "Create Free Digital Documents & Download Online",
                    "description" => "Create and manage digital documents",
                    "icon" => "fa-solid fa-file",
                    "link" => route('toollist', 'digital-document')
                ],
                [
                    "title" => "Word Counter",
                    "seo_title" => "Free Online Word Counter Tool",
                    "description" => "Count words, characters, sentences & paragraphs, spaces and more.",
                    "icon" => "fa-solid fa-font",
                    "link" => route('toollist', 'word-counter')
                ],
                [
                    "title" => "Merge Images Into PDF",
                    "seo_title" => "Merge Images Into PDF Online for Free",
                    "description" => "Turn multiple photos or images in any format into a polished, professional PDF.",
                    "icon" => "fa-solid fa-file-pdf",
                    "link" => route('toollist', 'merge-images-to-pdf')
                ],
            ],
            "utilities" => [
                [
                    "title" => "Timezone Converter",
                    "seo_title" => "Free Online Timezone Converter",
                    "description" => "Convert time between different timezones",
                    "icon" => "fas fa-clock",
                    "link" => route('toollist', 'timezone')
                ],
                [
                    "title" => "Digital Signature",
                    "seo_title" => "Create Your Free Digital Signature Online in Seconds",
                    "description" => "Create your digital signature in seconds",
                    "icon" => "fa-solid fa-pen",
                    "link" => route('toollist', 'signature')                    
                ],
                [
                    "title" => "Screen Recorder",
                    "seo_title" => "Online Free Screen Recorder with Audio, Download FREE",
                    "description" => "Record your screen with audio",
                    "icon" => "fa-solid fa-desktop",
                    "link" => route('toollist', 'screen-recording')                    
                ],
                [
                    "title" => "Color Picker",
                    "seo_title" => "Free Online Color Picker Tool",
                    "description" => "Pick and convert colors easily",
                    "icon" => "fa-solid fa-palette",
                    "link" => route('toollist', 'color-picker')                    
                ],
                [
                    "title" => "Image Converter",
                    "seo_title" => "Free Online Image Converter Tool",
                    "description" => "Convert images to different formats easily",
                    "icon" => "fa-solid fa-image",
                    "link" => route('toollist', 'image-converter')                    
                ],
                [
                    "title" => "Currency Converter",
                    "seo_title" => "Free Online Currency Converter Tool",
                    "description" => "Support for 160+ global currencies with real-time exchange rates.",
                    "icon" => "fas fa-exchange-alt",
                    "link" => route('toollist', 'currency-converter')                    
                ],
                [
                    "title" => "QR Code Generator",
                    "seo_title" => "Free QR Code Generator Online",
                    "description" => "Create customizable QR codes and download as PNG/SVG.",
                    "icon" => "fa-solid fa-qrcode",
                    "link" => route('toollist', 'qr-code-generator')                    
                ],
                [
                    "title" => "Barcode Sticker Generator",
                    "seo_title" => "Create Barcode Stickers Online for Free",
                    "description" => "Generate up to 50 barcode stickers at once and download as PDF.",
                    "icon" => "fas fa-barcode",
                    "link" => route('toollist', 'barcode-sticker-generator')
                ],
                [
                    "title" => "Unicode Text Converter",
                    "seo_title" => "Free Online Unicode Text Converter Tool",
                    "description" => "Generate fancy Unicode styles and copy anywhere.",
                    "icon" => "fa-solid fa-language",
                    "link" => route('toollist', 'code-text-converter')
                ],
                [
                    "title" => "Code Beautifier",
                    "seo_title" => "Free Online Code Beautifier | Format & Beautify JavaScript, CSS & HTML",
                    "description" => "Format HTML, JavaScript, and CSS for better readability.",
                    "icon" => "fa-solid fa-code",
                    "link" => route('toollist', 'code-beautifier')
                ],
                [
                    "title" => "Code Minifiers",
                    "seo_title" => "Free Online Code Minifier | Minify JavaScript, CSS & HTML Instantly",
                    "description" => "Free Online Code Minifier | Minify JavaScript, CSS & HTML Instantly",
                    "icon" => "fa-solid fa-code",
                    "link" => route('toollist', 'code-minifier')
                ],
                [
                    "title" => "Text to Speech",
                    "seo_title" => "Open Text to Speech Converter - Free Online TTS Tool",
                    "description" => "Generate strong, random passwords easily",
                    "icon" => "fas fa-microphone",
                    "link" => route('toollist', 'text-to-speech')
                ],
                [
                    "title" => "Split PDF Instantly",
                    "seo_title" => "Open Split PDF Instantly - Free Online PDF Split Tool",
                    "description" => "Easily split your PDF into selected pages or individual files",
                    "icon" => "fas fa-file-pdf",
                    "link" => route('toollist', 'split-pdf')
                ]
            ],
        ];               
		return view("home", ["toolKey" => "toollist", "totalTools"=>$totalTools, "feactureToolListArr" => $feactureToolListArr]);
    }

    public function aboutUs()
    {
        return view("about-us");
    }

    public function toolList(Request $request, $category = null)
    {
        $tools = Tools::where("status","Active");
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $tools->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhere('keywords', 'LIKE', "%{$search}%");
            });
        }

        if ($request->has('category') && !empty($request->category))
            $category = $request->search;

        if(!empty($category)) {
            $tools = $tools->where("category","LIKE", "%".$category."%");
        }
        $tools = $tools->latest()->paginate(10)->appends($request->all());
        return view('tools.list', ['tools' => $tools, "category" => $category, "param" => $request->all()]);
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
		if(!empty($subpart) && (in_array($toolkey, ['timezone', 'image-converter','currency-converter'])))
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

        // Add home page
        $sitemap = Sitemap::create()
            ->add(
                Url::create('/')
                    ->setPriority(1.0)
                    ->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)
            );

        // Add static pages (not in DB)
        $staticPages = [
            ["url" => route('about-us'), "changeFreq" => Url::CHANGE_FREQUENCY_MONTHLY],
            ["url" => route('contact-us'), "changeFreq" => Url::CHANGE_FREQUENCY_MONTHLY],
            ["url" => route('toollist', 'terms-of-use'), "changeFreq" => Url::CHANGE_FREQUENCY_MONTHLY],
            ["url" => route('toollist', 'privacy-policy'), "changeFreq" => Url::CHANGE_FREQUENCY_MONTHLY],
            ["url" => route('toollist', 'disclaimer'), "changeFreq" => Url::CHANGE_FREQUENCY_MONTHLY],
            ["url" => route('toollist', ['image-converter','jpg-to-png']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist', ['image-converter','jpg-to-webp']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist', ['image-converter','png-to-webp']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist', ['image-converter','png-to-jpg']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist', ['image-converter','webp-to-jpg']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist', ['image-converter','webp-to-png']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','UTC-to-IST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','UTC-to-EST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','UTC-to-CST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','UTC-to-PST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-ECT']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','IST-to-EST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','IST-to-UTC']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','IST-to-PDT']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-GMT']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-ICT']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','GMT-to-PST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-IST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','BST-to-EDT']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','IST-to-GMT']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-MSK']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','BST-to-CST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','CST-to-BST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','UTC-to-PDT']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','JST-to-EST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-HKT']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-PST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','CST-to-EST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','PDT-to-CST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','AEST-to-IST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-SGT']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-JST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-CET']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-GST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-AEST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['timezone','EST-to-NZST']), "changeFreq" => Url::CHANGE_FREQUENCY_WEEKLY],
            ["url" => route('toollist',['currency-converter','usd-to-inr']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','eur-to-inr']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','usd-to-eur']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','usd-to-gbp']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','usd-to-jpy']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','usd-to-cad']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','usd-to-aud']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','inr-to-aed']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','usd-to-cny']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','eur-to-gbp']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
            ["url" => route('toollist',['currency-converter','cad-to-inr']), "changeFreq" => Url::CHANGE_FREQUENCY_DAILY],
        ];
        //echo "<pre>"; print_r($staticPages);exit;
        foreach ($staticPages as $key => $page) {
            $sitemap->add(
                Url::create($page['url'])
                    ->setPriority(0.6)
                    ->setChangeFrequency($page['changeFreq'])
            );
        }

        // Fetch Tools data from DB in chunks
        Tools::select('id', 'slug', 'updated_at')->chunkById(500, function ($tools) use ($sitemap) {
            foreach ($tools as $tool) {
                $changeFreq = ($tool->slug == "currency-converter") ? Url::CHANGE_FREQUENCY_DAILY : Url::CHANGE_FREQUENCY_WEEKLY;
                $sitemap->add(
                    Url::create(route('toollist', $tool->slug))
                        ->setLastModificationDate($tool->updated_at)
                        ->setChangeFrequency($changeFreq)
                        ->setPriority(0.8)
                );
            }
        });

        return response($sitemap->render(), 200)->header('Content-Type', 'application/xml');
		//return response()->view('sitemap')->header('Content-Type', 'text/xml');
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