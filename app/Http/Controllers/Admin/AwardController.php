<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    private $awardObject;

    public function __construct()
    {
        $this->awardObject = new Award();
    }

    public function index()
    {
        $awards = Award::latest()->get();
        return view('backend.admin.award', compact('awards'));
    }

    public function store(Request $request)
    {
        $this->awardObject->storeAward($request);
        return back();
    }

    public function edit($id)
    {
        $award = Award::findOrFail($id);
        $awards = Award::latest()->get();
        return view('backend.admin.award', compact('awards', 'award'));
    }

    public function update(Request $request, $id)
    {
        $this->awardObject->updateAward($request, $id);
        return redirect()->route('admin.awards.index');
    }

    public function destroy($id)
    {
        $this->awardObject->destroyAward($id);
        return back();
    }
}
