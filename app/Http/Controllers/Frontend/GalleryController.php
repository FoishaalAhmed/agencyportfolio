<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BusinessWall;
use App\Models\EventWall;
use App\Models\Page;
use App\Models\Portfolio;

class GalleryController extends Controller
{
    public function photo()
    {
        $businessWallObject = new BusinessWall();
        $eventWallObject = new EventWall();
        $eventCount = EventWall::count();
        $events = $eventWallObject->getAllEventWall()->toArray();
        $walls = $businessWallObject->getAllBusinessWall();
        return view('frontend.gallery', compact('events', 'walls', 'eventCount'));
    }

    public function about()
    {
        $weAre = Page::where('slug', 'about-us')->first();
        $message = Page::where('slug', 'message-from-ceo')->first();
        return view('frontend.about', compact('weAre', 'message'));
    }

    public function works()
    {
        $portfolios = Portfolio::latest()->get();
        return view('frontend.portfolio', compact('portfolios'));
    }
}
