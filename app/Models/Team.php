<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo', 'name', 'position', 'facebook', 'linkedin', 'twitter', 'priority',
    ];

    public function storeTeam(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/teams/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->name     = $request->name;
        $this->position = $request->position;
        $this->facebook = $request->facebook;
        $this->linkedin = $request->linkedin;
        $this->twitter  = $request->twitter;
        $this->priority = $request->priority;
        $storeTeam      = $this->save();

        $storeTeam
            ? session()->flash('message', 'New Team Member Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateTeam(Object $request, Int $id)
    {
        $team = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {
            if (file_exists($team->photo)) unlink($team->photo);
            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/teams/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $team->photo     = $image_url;
        }

        $team->name     = $request->name;
        $team->position = $request->position;
        $team->facebook = $request->facebook;
        $team->linkedin = $request->linkedin;
        $team->twitter  = $request->twitter;
        $team->priority = $request->priority;
        $updateTeam     = $team->save();

        $updateTeam
            ? session()->flash('message', 'Team Member Info Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyTeam(Int $id)
    {
        $team = $this::findOrFail($id);
        if (file_exists($team->photo)) unlink($team->photo);
        $destroyTeam  = $team->delete();

        $destroyTeam
            ? session()->flash('message', 'Team Member Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
