<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Award;
use App\Models\Client;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('position', 'asc')->take(6)->get();
        $who_we_are = Page::where('slug', 'who-we-are')->first();
        $what_we_stand_for = Page::where('slug', 'what-we-stand-for')->first();
        $firstTwentyClients = Client::skip(0)->take(20)->select('logo')->get();
        $secondTwentyClients = Client::skip(20)->take(20)->select('logo')->get();
        $thirdTwentyClients = Client::skip(40)->take(20)->select('logo')->get();
        $awards = Award::latest()->take(8)->get();
        return view('frontend.index', compact('services', 'who_we_are', 'firstTwentyClients', 'secondTwentyClients', 'thirdTwentyClients', 'awards', 'what_we_stand_for'));
    }
}
