<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventRequest;
use App\Models\EventWall;
use App\Models\Service;

class EventWallController extends Controller
{
    private $eventWallObject;

    public function __construct()
    {
        $this->eventWallObject = new EventWall();
    }

    public function index()
    {
        $events = $this->eventWallObject->getAllEventWall();
        return view('backend.admin.events.index', compact('events'));
    }

    public function create()
    {
        $services = Service::select('id', 'name')->get();
        return view('backend.admin.events.create', compact('services'));
    }

    public function store(EventRequest $request)
    {
        $this->eventWallObject->storeEventWall($request);
        return back();
    }


    public function edit($id)
    {
        $event = EventWall::findOrFail($id);
        $services = Service::select('id', 'name')->get();
        return view('backend.admin.events.edit', compact('services', 'event'));
    }

    public function update(EventRequest $request, $id)
    {
        $this->eventWallObject->updateEventWall($request, $id);
        return redirect()->route('admin.events.index');
    }

    public function destroy($id)
    {
        $this->eventWallObject->destroyEventWall($id);
        return back();
    }
}
