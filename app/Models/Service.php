<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    public function storeService(Object $request)
    {
        $image = $request->file('icon');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/services/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->icon     = $image_url;
        }

        $this->name        = $request->name ;
        $this->slug        = $request->slug ;
        $this->description = $request->description ;
        $storeService      = $this->save();

        $storeService
            ? session()->flash('message', 'ServiceCreated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateService(Object $request, Int $id)
    {
        $service = $this::findOrFail($id);
        $image = $request->file('icon');

        if ($image) {

            if (file_exists($service->icon)) unlink($service->icon);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/services/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $service->icon   = $image_url;
        }

        $service->name        = $request->name ;
        $service->slug        = $request->slug ;
        $service->description = $request->description ;
        $updateService        = $service->save();

        $updateService
            ? session()->flash('message', 'Service Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyService(Int $id)
    {
        $service = $this::findOrFail($id);

        if (file_exists($service->icon)) unlink($service->icon);
        $destroyService  = $service->delete();

        $destroyService
            ? session()->flash('message', 'Service Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
