<?php

namespace App\Http\Controllers;

use PDF;
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

    public function contactUs()
    {
        return view("contact-us");
    }

    public function index($toolkey = "toollist", $subpart = "")
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
			return view("home", ["toolKey" => $toolkey, "extraParams" => $extraParams]);
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
}