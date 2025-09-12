<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CardTemplateController extends Controller
{
    public function index()
    {
        $cards = DB::table('card_templates')->orderBy('id')->get();
        return view("tools.index", ["toolKey" => 'cards', "cards" => $cards]);
    }

    public function show($slug)
    {
        $card = DB::table('card_templates')->where('slug', $slug)->first();
        if (!$card) {
            abort(404);
        }
        return view('tools.greeting-cards', compact('card'));
    }
}
