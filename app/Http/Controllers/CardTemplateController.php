<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CardTemplates;
use App\Models\CardTemplateBackground;
use App\Models\Tools;
use Jaybizzle\CrawlerDetect\CrawlerDetect;

class CardTemplateController extends Controller
{
    public function index(Request $request, $category = null)
    {
        $cards = CardTemplates::whereNotNull("category");
        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $cards->where(function($q) use ($search) {
                $q->where('title', 'LIKE', "%{$search}%")
                  ->orWhere('description', 'LIKE', "%{$search}%")
                  ->orWhere('seo_keywords', 'LIKE', "%{$search}%");
            });
        }

        if(empty($category))
            $category = $request->search;

        if(!empty($category)) {
            $cards = $cards->where("category","LIKE", "%".$category."%");
        }
        $cards = $cards->paginate(10)->appends($request->all());


        $currentTool = Tools::select(["id", "slug","category"])->where("slug",'cards')->first();
        
        return view("tools.index", ["toolKey" => $currentTool->slug, "tool_id" => $currentTool->id, "cards" => $cards, "category" => $category, "param" => $request->all()]);
    }

    public function show($slug)
    {
        $card = CardTemplates::where('slug', $slug)->first();
        if (!$card) {
            abort(404);
        }
        else {
            $similarTools = [];
            if(!empty($card))
            {
                $categories = explode(',', $card->category);
                $similarTools = CardTemplates::where("id", "!=", $card->id)
                ->where(function($query) use ($categories) {
                    foreach ($categories as $category) {
                        $query->orWhere("category", "LIKE", "%" . trim($category) . "%");
                    }
                })->get();
            }
        }
        return view('tools.greeting-cards', compact('card', 'similarTools'));
    }

    /**
     * Return paginated card template backgrounds as JSON for AJAX.
     * Params: ?page=1
     */
    public function backgrounds(Request $request)
    {
        $perPage = 10;
        $query = CardTemplateBackground::where('is_active', true)->orderBy('id', 'asc');
        if(!empty($request->get('category')) && $request->get('category') != 'All') {
            $category = $request->get('category');
            $category .= ",All";//Common images for all cards
            $categoryArr = explode(",", $category);
            $query = $query->where(function($q) use ($categoryArr) {
                foreach ($categoryArr as $cat) {
                    if(!empty($cat)) {
                        $q->orWhere('category', 'LIKE', "%" . trim($cat) . "%");
                    }
                }
            });
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

    /* Counter update when Card Download */
    public function updateUseCounter(Request $request, CardTemplates $card)
    {
        $crawlerDetect = new CrawlerDetect;
        if($request->ajax() && !$crawlerDetect->isCrawler()) {
            $card->increment('use_count');
        }
    }
}
