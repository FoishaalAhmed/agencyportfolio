<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\General;
use App\Models\IntroVideo;
use App\Models\News;
use App\Models\Page;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $intro = IntroVideo::first();
        $client = Client::count();
        $tvc = Portfolio::where('type', 'TVC')->count();
        $documentary = Portfolio::where('type', 'Documentary')->count();
        $project = General::where('name', 'project')->first();
        $reliable = Page::where('slug', 'we-are-reliable')->first();
        $services = Service::oldest()->take(4)->get();
        $testimonial = Testimonial::latest()->first();
        $tvcs = Portfolio::where('type', 'TVC')->get();
        $documentaries = Portfolio::where('type', 'Documentary')->get();
        $clients = Client::select('logo')->get();
        $news = News::latest()->first();
        return view('frontend.index', compact('intro', 'client', 'tvc', 'documentary', 'project', 'services', 'reliable', 'testimonial', 'tvcs', 'documentaries', 'clients', 'news'));
    }
}
