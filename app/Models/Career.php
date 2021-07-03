<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'position', 'photo', 'description', 'last_date', 'slug',
    ];

    public function storeCareer(Object $request)
    {
        $image = $request->file('photo');
        $image_name      = date('YmdHis');
        $ext             = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path     = 'public/images/careers/';
        $image_url       = $upload_path . $image_full_name;
        $success         = $image->move($upload_path, $image_full_name);
        $this->photo     = $image_url;

        $this->date        = date('Y-m-d', strtotime($request->date));
        $this->last_date   = date('Y-m-d', strtotime($request->last_date));
        $this->position    = $request->position;
        $this->slug        = $request->slug;
        $this->description = $request->description;
        $storeCareer       = $this->save();

        $storeCareer
            ? session()->flash('message', 'New Job Has Been Posted!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateCareer(Object $request, Int $id)
    {
        $career = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {
            if (file_exists($career->photo)) unlink($career->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/careers/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $career->photo     = $image_url;
        }

        $career->date        = date('Y-m-d', strtotime($request->date));
        $career->last_date   = date('Y-m-d', strtotime($request->last_date));
        $career->position    = $request->position;
        $career->slug        = $request->slug;
        $career->description = $request->description;
        $updateCareer        = $career->save();

        $updateCareer
            ? session()->flash('message', 'Job Post Updated!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyCareer(Int $id)
    {
        $career = $this::findOrFail($id);
        if (file_exists($career->photo)) unlink($career->photo);
        $destroyCareer       = $career->delete();

        $destroyCareer
            ? session()->flash('message', 'Job Post Deleted!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
