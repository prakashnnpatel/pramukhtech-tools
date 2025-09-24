<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CardTemplates;
use App\Models\CardTemplateBackground;
use App\Models\Tools;

class CardTemplateController extends Controller
{
    public function index()
    {
        $cards = CardTemplates::orderBy('id')->get();
        Tools::where("slug", 'cards')->increment("use_count");
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

    /**
     * Return paginated card template backgrounds as JSON for AJAX.
     * Params: ?page=1
     */
    public function backgrounds(Request $request)
    {
        $perPage = 10;
        $query = CardTemplateBackground::where('is_active', true)->orderBy('id', 'asc');
        if(!empty($request->get('category')) && $request->get('category') != "All") {
            $query = $query->where("category", $request->get('category'));
        }
        $backgrounds = $query->paginate($perPage);

        // Map to include full image URLs
        $backgrounds->getCollection()->transform(function ($item) {
            $item->image_url = asset($item->image_path);
            $item->thumbnail_url = $item->thumbnail_path ? asset($item->thumbnail_path) : asset($item->image_path);
            return $item;
        });

        return response()->json([
            'data' => $backgrounds->items(),
            'current_page' => $backgrounds->currentPage(),
            'last_page' => $backgrounds->lastPage(),
            'per_page' => $backgrounds->perPage(),
            'total' => $backgrounds->total(),
        ]);
    }

    /***Counter update when Card Download */
    public function updateUseCardCounter(CardTemplates $card)
    {
        $card->increment('use_count');
    }
}
