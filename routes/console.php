<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Schedule::command('Manage:CurrencyRate')->daily();
Schedule::command('sitemap:ping')->daily();