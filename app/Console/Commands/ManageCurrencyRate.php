<?php

namespace App\Console\Commands;

use Artisan;
use Illuminate\Console\Command;
use App\Models\Currency;

class ManageCurrencyRate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Manage:CurrencyRate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update currency latest rate after 24 hours';

    ### Exchangerate api url
	protected $api_url = "https://v6.exchangerate-api.com/v6/{api_key}/latest/{base_cureency}";

    public function __construct()
    {
        parent::__construct();
		
		$defaultCureencyCode = "USD";
		$this->api_url = str_replace("{api_key}", config('services.exchangerate.key'), $this->api_url);
		$this->api_url = str_replace("{base_cureency}", $defaultCureencyCode, $this->api_url);
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        ### cache clear
		Artisan::call('config:clear');
	    Artisan::call('cache:clear');
		
	   ### get curreny updated rate list using api
       $client = new \GuzzleHttp\Client();
	   $response = $client->request('GET', $this->api_url);
 
	   $statusCode =  $response->getStatusCode();
	   if($statusCode == 200)
	   {
			$response = json_decode($response->getBody()->getContents(), true);
			if(!empty($response['result']) && $response['result'] == "success")
		    {
				### get database curreny list 
				$currenyCodeList = Currency::select("id","rate","code")->get();				
				$conversionRatesList = $response['conversion_rates'];
				
				if(!empty($currenyCodeList))
				{
					foreach($currenyCodeList as $key => $currenyInfo)
					{
						$currentCureenyRate = $conversionRatesList[$currenyInfo->code] ?? "";                       
						if(!empty($currentCureenyRate)) {
							### Now Curreny Latest rate updated
							$currenyInfo->rate = $currentCureenyRate;
							$currenyInfo->save();
						}
					}
				}
			}
	   }
 
	   ### cache clear
	   Artisan::call('config:clear');
	   Artisan::call('cache:clear');
    }
}
