<?php
$baseURL = config('app.url');
$urlList = [
	["priority" =>"1.00", "frequency"=> "daily", "loc" => $baseURL],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','fd-calculator')],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','sip-calculator')],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','emi-calculator')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','screen-recording')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','signature')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','color-picker')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','custom-invoice')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','generate-quote')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','purchase-order')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','timezone')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-IST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-EST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-CST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-PST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-ECT'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','IST-to-EST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','IST-to-UTC'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','IST-to-PDT'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-GMT'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-ICT'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','GMT-to-PST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-IST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','BST-to-EDT'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','IST-to-GMT'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-MSK'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','BST-to-CST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','CST-to-BST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-PDT'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','JST-to-EST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-HKT'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-PST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','CST-to-EST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','PDT-to-CST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','AEST-to-IST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-SGT'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-JST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-CET'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-GST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-AEST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-NZST'])],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['digital-document'])],
];
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
	@foreach ($urlList as $data)
		<url>
			<loc>{{$data['loc']}}</loc>
			<lastmod>{{ Carbon\Carbon::now()->subDays(1)->tz('UTC')->toAtomString() }}</lastmod>
			<priority>{{$data['priority']}}</priority>
			<changefreq>{{$data['frequency']}}</changefreq>
		</url>
	@endforeach
</urlset>