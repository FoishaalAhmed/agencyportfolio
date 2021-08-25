<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessWall extends Model
{
    use HasFactory;

    protected $fillable = [
        'company', 'year', 'service_id', 'description', 'photo',
    ];

    public function getAllBusinessWall()
    {
        $walls = $this::join('services', 'business_walls.service_id', '=', 'services.id')
            ->orderBy('business_walls.created_at', 'desc')
            ->select('business_walls.*', 'services.name')
            ->get();
        return $walls;
    }

    public function storeBusinessWall(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/walls/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->company     = $request->company;
        $this->year        = $request->year;
        $this->service_id  = $request->service_id;
        $this->description = $request->description;
        $storeBusinessWall = $this->save();
        $storeBusinessWall
            ? session()->flash('message', 'New Business Wall Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateBusinessWall(Object $request, Int $id)
    {
        $wall = $this::findOrFail($id);
        $image = $request->file('photo');
        if ($image) {
            if (file_exists($wall->photo)) unlink($wall->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/walls/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $wall->photo     = $image_url;
        }

        $wall->company     = $request->company;
        $wall->year        = $request->year;
        $wall->service_id  = $request->service_id;
        $wall->description = $request->description;
        $updatedBusinessWall = $wall->save();
        $updatedBusinessWall
            ? session()->flash('message', 'Business Wall Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyBusinessWall(Int $id)
    {
        $wall = $this::findOrFail($id);
        if (file_exists($wall->photo)) unlink($wall->photo);
        $destroyBusinessWall = $wall->delete();
        $destroyBusinessWall
            ? session()->flash('message', 'Business Wall Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
