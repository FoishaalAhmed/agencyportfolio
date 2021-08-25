<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WallRequest;
use App\Models\BusinessWall;
use App\Models\Service;

class BusinessWallController extends Controller
{
    private $businessWallObject;

    public function __construct()
    {
        $this->businessWallObject = new BusinessWall();
    }

    public function index()
    {
        $walls = $this->businessWallObject->getAllBusinessWall();
        return view('backend.admin.walls.index', compact('walls'));
    }

    public function create()
    {
        $services = Service::select('id', 'name')->get();
        return view('backend.admin.walls.create', compact('services'));
    }

    public function store(WallRequest $request)
    {
        $this->businessWallObject->storeBusinessWall($request);
        return back();
    }


    public function edit($id)
    {
        $wall = BusinessWall::findOrFail($id);
        $services = Service::select('id', 'name')->get();
        return view('backend.admin.walls.edit', compact('services', 'wall'));
    }

    public function update(WallRequest $request, $id)
    {
        $this->businessWallObject->updateBusinessWall($request, $id);
        return redirect()->route('admin.walls.index');
    }

    public function destroy($id)
    {
        $this->businessWallObject->destroyBusinessWall($id);
        return back();
    }
}
