<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [

        'email', 'phone', 'facebook', 'twitter', 'instagram', 'address', 'map', 

    ];

    public static $validateRule = [

        'email'     => 'required|email|max:255',
        'phone'     => 'required|string|max:25',
        'fax'       => 'nullable|string|max:50',
        'address'   => 'nullable|string',
        'map'       => 'nullable|string',
        'facebook'  => 'nullable|string|max:255',
        'twitter'   => 'nullable|string|max:255',
        'instagram' => 'nullable|string|max:255',
        'pinterest' => 'nullable|string|max:255',
    ];

    public function updateContact(Object $request, Int $id)
    {
        $contact = $this::findOrFail($id);
        $contact->email     = $request->email;
        $contact->phone     = $request->phone;
        $contact->fax       = $request->fax;
        $contact->facebook  = $request->facebook;
        $contact->twitter   = $request->twitter;
        $contact->instagram = $request->instagram;
        $contact->pinterest = $request->pinterest;
        $contact->address   = $request->address;
        $contact->map       = $request->map;
        $updateContact      = $contact->save();

        $updateContact ?
            session()->flash('message', 'Contact Updated Successfully!') :
            session()->flash('message', 'Something Went Wrong!');
    }
}
