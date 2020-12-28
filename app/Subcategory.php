<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    protected $fillable=
    [
    	'name','category_id'
    ];

    //relationship method (many to one)
    public function category()
    {
    	return $this->belongsto('App\Category');
    }
   public function items()
    {
    	return $this->hasMany('App\Item');
    }
}
