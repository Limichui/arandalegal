<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
//use App\Models\web\FooterTitle;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class FooterController extends Controller
{
    public function getFooter() 
    { 
        $locale = App::getLocale(); 
        /*
        $sections = FooterTitle::where('locale', $locale) 
            ->orderBy('order') 
            ->with(['items' => function ($query) use ($locale) { 
                $query->where('locale', $locale)->orderBy('order'); 
            }]) ->get(); 
            
            return view('web.partials.footer', compact('sections')); 
        */
        $titles = DB::table('footer_titles')
            ->select('id', 'title', 'order')
            ->where('locale', $locale)
            ->orderBy('order')
            ->get();

        $subTitles = DB::table('footer_secondary_titles')
            ->select('id', 'footer_title_id', 'title', 'url', 'order')
            ->where('locale', $locale)
            ->orderBy('order')
            ->get();
        
        return view('web.partials.footer', compact('titles', 'subTitles'));
    }
}
