<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;

class NewsController extends Controller
{
    private $newsObject;

    public function __construct()
    {
        $this->newsObject = new News();
    }

    public function index()
    {
        $news = News::latest()->get();
        return view('backend.admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('backend.admin.news.create');
    }

    public function store(NewsRequest $request)
    {
        $this->newsObject->storeNews($request);
        return back();
    }

    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('backend.admin.news.edit', compact('news'));
    }

    public function update(NewsRequest $request, $id)
    {
        $this->newsObject->updateNews($request, $id);
        return redirect()->route('admin.news.index');
    }

    public function destroy($id)
    {
        $this->newsObject->destroyNews($id);
        return back();
    }
}
