<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\IntroVideo;
use Illuminate\Http\Request;

class IntroVideoController extends Controller
{
    private $introVideoObject;

    public function __construct()
    {
        $this->introVideoObject = new IntroVideo();
    }

    public function index()
    {
        $intro = IntroVideo::firstOrFail();
        return view('backend.admin.videos.index', compact('intro'));
    }

    public function edit($id)
    {
        $video = IntroVideo::findOrFail($id);
        return view('backend.admin.videos.edit', compact('video'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(IntroVideo::$validateRule);
        $this->introVideoObject->updateIntroVideo($request, $id);
        return redirect()->route('admin.videos.index');
    }

}
