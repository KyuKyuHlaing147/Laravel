<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
     protected $fillable=
    [
    	'codeno','name','photo','price','discount','description','brand_id','subcategory_id'
    ];

    public function subcategory()
    {
    	return $this->belongsto('App\Subcategory');
    }

    public function brand()
    {
    	return $this->belongsto('App\Brand');
    }

    public function orders()
      {
          return $this->belongsToMany('App\Order','orderdetails')
                      ->withPivot('qty')
                      ->withTimestamps();
      }
    
}
