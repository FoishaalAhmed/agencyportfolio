<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClientRequest;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    private $clientObject;

    public function __construct()
    {
        $this->clientObject = new Client();
    }

    public function index()
    {
        $clients = Client::orderBy('name', 'asc')->get();
        return view('backend.admin.client', compact('clients'));
    }

    public function store(ClientRequest $request)
    {
        $this->clientObject->storeClient($request);
        return back();
    }


    public function edit($id)
    {
        $client = Client::findOrFail($id);
        $clients = Client::orderBy('name', 'asc')->get();
        return view('backend.admin.client', compact('clients', 'client'));
    }

    public function update(ClientRequest $request, $id)
    {
        $this->clientObject->updateClient($request, $id);
        return redirect()->route('admin.clients.index');
    }

    public function destroy($id)
    {
        $this->clientObject->destroyClient($id);
        return back();
    }
}
