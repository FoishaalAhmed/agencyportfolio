<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CareerRequest;
use App\Models\Career;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    private $careerObject;

    public function __construct()
    {
        $this->careerObject = new Career();
    }

    public function index()
    {
        $careers = Career::latest()->get();
        return view('backend.admin.careers.index', compact('careers'));
    }

    public function create()
    {
        return view('backend.admin.careers.create');
    }

    public function store(CareerRequest $request)
    {
        $this->careerObject->storeCareer($request);
        return back();
    }

    public function edit($id)
    {
        $career = Career::findOrFail($id);
        return view('backend.admin.careers.edit', compact('career'));
    }

    public function update(Request $request, $id)
    {
        $this->careerObject->updateCareer($request, $id);
        return redirect()->route('admin.careers.index');
    }

    public function destroy($id)
    {
        $this->careerObject->destroyCareer($id);
        return back();
    }
}
