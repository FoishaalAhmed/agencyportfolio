<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'type', 'photo', 'video',
    ];

    public function storePortfolio(Object $request)
    {
        $image = $request->file('photo');

        if ($image) {

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/portfolios/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $this->photo     = $image_url;
        }

        $this->type  = $request->type;
        $this->video = $request->video;
        $storePortfolio = $this->save();

        $storePortfolio
            ? session()->flash('message', 'New Portfolio Created Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function updatePortfolio(Object $request, Int $id)
    {
        $portfolio = $this::findOrFail($id);

        $image = $request->file('photo');

        if ($image) {

            if (file_exists($portfolio->photo)) unlink($portfolio->photo);

            $image_name      = date('YmdHis');
            $ext             = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path     = 'public/images/portfolios/';
            $image_url       = $upload_path . $image_full_name;
            $success         = $image->move($upload_path, $image_full_name);
            $portfolio->photo  = $image_url;
        }

        $portfolio->type  = $request->type;
        $portfolio->video  = $request->video;

        $storePortfolio = $portfolio->save();

        $storePortfolio
            ? session()->flash('message', 'Portfolio Updated Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }

    public function destroyPortfolio(Int $id)
    {
        $portfolio = $this::findOrFail($id);
        if (file_exists($portfolio->photo)) unlink($portfolio->photo);
        $destroyPortfolio = $portfolio->delete();

        $destroyPortfolio
            ? session()->flash('message', 'Portfolio Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
