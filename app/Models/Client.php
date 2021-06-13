<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'logo',
    ];

    public function storeClient(Object $request)
    {
        $image = $request->file('logo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/clients/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->logo      = $image_url;
        }

        $this->name = $request->name;
        $storeClient = $this->save();

        $storeClient
            ? session()->flash('message', 'New Client Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateClient(Object $request, Int $id)
    {
        $client = $this::findOrFail($id);
        $image = $request->file('logo');

        if ($image) {

            if (file_exists($client->logo)) unlink($client->logo);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/clients/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $client->logo    = $image_url;
        }

        $client->name = $request->name;
        $updateClient = $client->save();

        $updateClient
            ? session()->flash('message', 'Client Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyClient(Int $id)
    {
        $client = $this::findOrFail($id);

        if (file_exists($client->logo)) unlink($client->logo);
        $destroyClient = $client->delete();

        $destroyClient
            ? session()->flash('message', 'Client Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
