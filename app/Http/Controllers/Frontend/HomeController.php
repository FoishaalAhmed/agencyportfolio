<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Client;
use App\Models\Page;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $strategic_planning = Page::where('slug', 'strategic-planning')->first();
        $media_buying = Page::where('slug', 'media-buying')->first();
        $creative_design = Page::where('slug', 'creative-design')->first();
        $audiovisual_production = Page::where('slug', 'audiovisual-production')->first();
        $digital_marketing = Page::where('slug', 'digital-marketing')->first();
        $event_management = Page::where('slug', 'event-management')->first();
        $web_development = Page::where('slug', 'web-development')->first();
        $pr = Page::where('slug', 'pr')->first();
        $monitoring = Page::where('slug', 'monitoring')->first();
        $who_we_are = Page::where('slug', 'who-we-are')->first();
        $firstThirteenClients = Client::skip(0)->Take(13)->select('logo')->get();
        $secondThirteenClients = Client::skip(13)->Take(13)->select('logo')->get();
        $thirdThirteenClients = Client::skip(26)->Take(13)->select('logo')->get();
        $awards = Award::latest()->take(8)->get();
        return view('frontend.index', compact('strategic_planning','media_buying', 'creative_design', 'audiovisual_production', 'digital_marketing', 'event_management', 'web_development', 'pr', 'monitoring', 'who_we_are', 'firstThirteenClients', 'secondThirteenClients', 'thirdThirteenClients', 'awards'));
    }
}
