<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'year', 'photo',
    ];

    public function storeAward(Object $request)
    {
        $image = $request->file('photo');
        if ($image) {
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/awards/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->name = $request->name;
        $this->year = $request->year;
        $storeAward = $this->save();

        $storeAward
            ? session()->flash('Message', 'Award Info Saved Successfully!')
            : session()->flash('Message', 'Something Went Wrong!');
    }

    public function updateAward(Object $request, Int $id)
    {
        $award = $this::findOrFail($id);
        $image = $request->file('photo');
        if ($image) {
            if (file_exists($award->photo)) unlink($award->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/awards/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $award->photo    = $image_url;
        }

        $award->name = $request->name;
        $award->year = $request->year;
        $updateAward = $award->save();

        $updateAward
            ? session()->flash('Message', 'Award Info Updated Successfully!')
            : session()->flash('Message', 'Something Went Wrong!');
    }

    public function destroyAward(Int $id)
    {
        $award = $this::findOrFail($id);
        if (file_exists($award->photo)) unlink($award->photo);
        $destroyAward = $award->delete();

        $destroyAward
            ? session()->flash('Message', 'Award Info Deleted Successfully!')
            : session()->flash('Message', 'Something Went Wrong!');
    }
}
