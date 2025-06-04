<?php
$baseURL = config('app.url');
$urlList = [
	["priority" =>"1.00", "frequency"=> "daily", "loc" => $baseURL],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','fd-calculator')],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','sip-calculator')],
	["priority" =>"0.80", "frequency"=> "weekly", "loc" => route('toollist','emi-calculator')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','timezone')],
	["priority" =>"0.90", "frequency"=> "weekly", "loc" => route('toollist','screen-recording')],
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