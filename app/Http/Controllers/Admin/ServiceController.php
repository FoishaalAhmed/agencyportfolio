<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $serviceObject;

    public function __construct()
    {
        $this->serviceObject = new Service();
    }

    public function index()
    {
        $services = Service::latest()->get();
        return view('backend.admin.services.index', compact('services'));
    }

    public function create()
    {
        return view('backend.admin.services.create');
    }

    public function store(ServiceRequest $request)
    {
        $this->serviceObject->storeService($request);
        return back();
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.admin.services.edit', compact('service'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $this->serviceObject->updateService($request, $id);
        return redirect()->route('admin.services.index');
    }

    public function destroy($id)
    {
        $this->serviceObject->destroyService($id);
        return back();
    }
}
