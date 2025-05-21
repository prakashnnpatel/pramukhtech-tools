<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($toolkey = "fd-calculator")
    {
        return view("home", ["toolKey" => $toolkey]);
    }

	public function sitemap() {
		return response()->view('sitemap')->header('Content-Type', 'text/xml');
	}
}