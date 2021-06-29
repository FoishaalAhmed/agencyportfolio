<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use App\Models\News;
use App\Models\Page;
use App\Models\Service;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function photo()
    {
        $photos = Gallery::where('type', 'Photo')->select('photo')->get();
        return view('frontend.gallery', compact('photos'));
    }

    public function about()
    {
        $weAre = Page::where('slug', 'who-we-are')->first();
        $message = Page::where('slug', 'message-from-ceo')->first();
        return view('frontend.about', compact('weAre', 'message'));
    }

    public function news($slug)
    {
        $news = News::where('slug', $slug)->firstOrFail();
        return view('frontend.news', compact('news'));
    }
}
