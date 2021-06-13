<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'date', 'title', 'slug', 'content', 'photo',
    ];

    public function storeNews(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/news/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->date    = date('Y-m-d', strtotime($request->date));
        $this->title   = $request->title;
        $this->slug    = $request->slug;
        $this->content = $request->content;
        $storeNews     = $this->save();

        $storeNews
            ? session()->flash('message', 'News Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updateNews(Object $request, Int $id)
    {
        $news = $this::findOrFail($id);
        $image = $request->file('photo');

        if ($image) {

            if (file_exists($news->photo)) unlink($news->photo);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/news/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $news->photo     = $image_url;
        }

        $news->date    = date('Y-m-d', strtotime($request->date));
        $news->title   = $request->title;
        $news->slug    = $request->slug;
        $news->content = $request->content;
        $updateNews    = $news->save();

        $updateNews
            ? session()->flash('message', 'News Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyNews(Int $id)
    {
        $news  = $this::findOrFail($id);
        if (file_exists($news->photo)) unlink($news->photo);
        $destroyNews = $news->save();

        $destroyNews
            ? session()->flash('message', 'News Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
