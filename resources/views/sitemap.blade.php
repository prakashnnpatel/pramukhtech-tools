<?php
$baseURL = config('app.url');
$urlList = [
	["priority" =>"1.00", "frequency"=> "daily", "loc" => $baseURL, "lastmod" => 45],
	["priority" =>"0.6", "frequency"=> "yearly", "loc" => route('about-us'), "lastmod" => 52],
	["priority" =>"0.5", "frequency"=> "yearly", "loc" => route('contact-us'), "lastmod" => 54],
	["priority" =>"0.5", "frequency"=> "yearly", "loc" => route('toollist', 'terms-of-use'), "lastmod" => 56],
	["priority" =>"0.5", "frequency"=> "yearly", "loc" => route('toollist', 'privacy-policy'), "lastmod" => 58],
	["priority" =>"0.5", "frequency"=> "yearly", "loc" => route('toollist', 'disclaimer'), "lastmod" => 60],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','fd-calculator'), 'lastmod'=> 2],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','sip-calculator'), 'lastmod'=> 3],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','emi-calculator'), 'lastmod'=> 4],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','screen-recording'), 'lastmod'=> 5],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','signature'), 'lastmod'=> 6],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','color-picker'), 'lastmod'=> 2],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','custom-invoice'), 'lastmod'=> 3],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','generate-quote'), 'lastmod'=> 4],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','purchase-order'), 'lastmod'=> 5],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','timezone'), 'lastmod'=> 6],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-IST']), 'lastmod'=> 2],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-EST']), 'lastmod'=> 3],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-CST']), 'lastmod'=> 4],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-PST']), 'lastmod'=> 5],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-ECT']), 'lastmod'=> 6],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','IST-to-EST']), 'lastmod'=> 2],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','IST-to-UTC']), 'lastmod'=> 3],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','IST-to-PDT']), 'lastmod'=> 4],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-GMT']), 'lastmod'=> 5],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-ICT']), 'lastmod'=> 6],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','GMT-to-PST']), 'lastmod'=> 2],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-IST']), 'lastmod'=> 3],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','BST-to-EDT']), 'lastmod'=> 4],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','IST-to-GMT']), 'lastmod'=> 5],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-MSK']), 'lastmod'=> 6],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','BST-to-CST']), 'lastmod'=> 2],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','CST-to-BST']), 'lastmod'=> 3],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','UTC-to-PDT']), 'lastmod'=> 4],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','JST-to-EST']), 'lastmod'=> 5],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-HKT']), 'lastmod'=> 6],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-PST']), 'lastmod'=> 2],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','CST-to-EST']), 'lastmod'=> 3],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','PDT-to-CST']), 'lastmod'=> 4],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','AEST-to-IST']), 'lastmod'=> 5],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-SGT']), 'lastmod'=> 6],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-JST']), 'lastmod'=> 2],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-CET']), 'lastmod'=> 3],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-GST']), 'lastmod'=> 4],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-AEST']), 'lastmod'=> 5],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist',['timezone','EST-to-NZST']), 'lastmod'=> 6],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist',['digital-document']), 'lastmod'=> 2],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','currency-converter'), 'lastmod'=> 3],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','word-counter'), 'lastmod'=> 4],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','merge-images-to-pdf'), 'lastmod'=> 5],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','qr-code-generator'), 'lastmod'=> 1],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','barcode-sticker-generator'), 'lastmod'=> 2],
];
?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
	@foreach ($urlList as $data)
		<url>
			<loc>{{$data['loc']}}</loc>
			<lastmod>{{ Carbon\Carbon::now()->subDays($data['lastmod'])->tz('UTC')->toAtomString() }}</lastmod>
			<priority>{{$data['priority']}}</priority>
			<changefreq>{{$data['frequency']}}</changefreq>
		</url>
	@endforeach
</urlset>
