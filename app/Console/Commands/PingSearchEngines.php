<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class PingSearchEngines extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ping search engines with the sitemap URL';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $sitemapUrl = url('sitemap.xml');

        $engines = [
            //'Google' => 'https://www.google.com/ping?sitemap=',
            //'Bing'   => 'https://www.bing.com/ping?sitemap=',
            'Yandex' => 'https://yandex.com/ping?sitemap=',
            // You can add more engines here if needed
        ];

        foreach ($engines as $name => $endpoint) {
            $url = $endpoint . urlencode($sitemapUrl);

            try {
                $response = Http::get($url);
				//dd($response);
                if ($response->successful()) {
                    $this->info("$name ping successful...");
                } else {
                    $this->warn("$name ping failed (Status: " . $response->status() . ")");
                }
            } catch (\Exception $e) {
                $this->error("$name ping error: " . $e->getMessage());
            }
        }
        $this->info('All done...');
    }
}
