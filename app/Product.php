<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['Name','CategoryID','Price'];

    public function Category(){
        return $this->belongsTo('App\Category');
    }
    public function image(){
        return $this->morphOne('App\Image','imageable');
    }
}
