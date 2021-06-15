<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IntroVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'video',
    ];

    public static $validateRule = [
        'video' => ['required', 'max:15360', 'mimes:mp4']
    ] ;

    public function updateIntroVideo(Object $request, Int $id)
    {
        $introVideo = $this::findOrFail($id);

        $video = $request->file('video');

        if (file_exists($introVideo->video)) unlink($introVideo->video);

        $video_name        = date('YmdHis');
        $ext               = strtolower($video->getClientOriginalExtension());
        $video_full_name   = $video_name . '.' . $ext;
        $upload_path       = 'public/videos/';
        $video_url         = $upload_path . $video_full_name;
        $success           = $video->move($upload_path, $video_full_name);
        $introVideo->video = $video_url;
        $updateIntroVideo  = $introVideo->save();

        $updateIntroVideo
            ? session()->flash('message', 'Intro Video Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
