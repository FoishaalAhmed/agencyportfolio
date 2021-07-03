<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    private $applicationObject;

    public function __construct()
    {
        $this->applicationObject = new Application();
    }

    public function Index()
    {
        $applications = Application::latest()->get();
        return view('backend.admin.applications.index', compact('applications'));
    }

    public function show($id)
    {
        $application = Application::findOrFail($id);
        return view('backend.admin.applications.show', compact('application'));
    }

    public function destroy($id)
    {
        $this->applicationObject->destroyApplication($id);
        return back();
    }
}
