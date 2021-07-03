<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'name', 'email', 'subject', 'message', 'cv',
    ];

    public function storeApplication(Object $request)
    {
        $image           = $request->file('cv');
        $image_name      = date('YmdHis');
        $ext             = strtolower($image->getClientOriginalExtension());
        $image_full_name = $image_name . '.' . $ext;
        $upload_path     = 'public/images/applications/';
        $image_url       = $upload_path . $image_full_name;
        $success         = $image->move($upload_path, $image_full_name);
        $this->cv        = $image_url;
        $this->date      = date('Y-m-d') ;
        $this->name      = $request->name ;
        $this->email     = $request->email ;
        $this->subject   = $request->subject ;
        $this->message   = $request->message ;
        $storeApplication = $this->save();

        if ($storeApplication) {
            return 'Job Application Submitted. We Will Contact You Shortly.';
        } else {
            return 'Something Went Wrong! Try Again.';
        } 
    }

    public function destroyApplication(Int $id)
    {
        $application = $this::findOrFail($id);
        if (file_exists($application->cv)) unlink($application->cv);
        $destroyApplication = $this->delete();
        $destroyApplication
            ? session()->flash('message', 'Application Deleted!')
            : session()->flash('message', 'Something Went Wrong!'); 
    }
}
