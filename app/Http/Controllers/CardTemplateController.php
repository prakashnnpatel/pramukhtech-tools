<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CardTemplates;
#use App\Models\CardTemplateBackground;

class CardTemplateController extends Controller
{
    public function index()
    {
        $cards = CardTemplates::orderBy('id')->get();
        return view("tools.index", ["toolKey" => 'cards', "cards" => $cards]);
    }

    public function show($slug)
    {
        $card = CardTemplates::where('slug', $slug)->first();
        if (!$card) {
            abort(404);
        }
        return view('tools.greeting-cards', compact('card'));
    }
}
