<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventWall extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'year', 'service_id', 'description', 'photo',
    ];

    public function getAllEventWall()
    {
        $walls = $this::join('services', 'event_walls.service_id', '=', 'services.id')
            ->orderBy('event_walls.created_at', 'desc')
            ->select('event_walls.*', 'services.name as service')
            ->get();
        return $walls;
    }

    public function storeEventWall(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/events/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->name     = $request->name;
        $this->year        = $request->year;
        $this->service_id  = $request->service_id;
        $this->description = $request->description;
        $storeEventWall = $this->save();
        $storeEventWall
            ? session()->flash('message', 'New Event Wall Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateEventWall(Object $request, Int $id)
    {
        $wall = $this::findOrFail($id);
        $image = $request->file('photo');
        if ($image) {
            if (file_exists($wall->photo)) unlink($wall->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/events/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $wall->photo     = $image_url;
        }

        $wall->name     = $request->name;
        $wall->year        = $request->year;
        $wall->service_id  = $request->service_id;
        $wall->description = $request->description;
        $updatedEventWall = $wall->save();
        $updatedEventWall
            ? session()->flash('message', 'Event Wall Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyEventWall(Int $id)
    {
        $wall = $this::findOrFail($id);
        if (file_exists($wall->photo)) unlink($wall->photo);
        $destroyEventWall = $wall->delete();
        $destroyEventWall
            ? session()->flash('message', 'Event Wall Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
