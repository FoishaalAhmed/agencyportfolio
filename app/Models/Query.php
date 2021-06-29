<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Query extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'message',
    ];

    public function storeQuery(Object $request)
    {
        $this->name    = $request->name ;
        $this->email   = $request->email ;
        $this->phone   = $request->phone ;
        $this->subject = $request->subject ;
        $this->message = $request->message ;
        $this->save() ;
    }

    public function destroyQuery(Int $id)
    {
        $query        = $this::findOrFail($id);
        $destroyQuery = $query->delete();

        $destroyQuery
            ? session()->flash('message', 'Query Deleted Successfully!')
            : session()->flash('message', 'Something Went Wrong!');
    }
}
