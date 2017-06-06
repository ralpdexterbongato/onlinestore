<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    public function images()
    {
      return $this->morphMany('App\image','imageable');
    }

    public function brand()
    {
      return $this->belongsTo('App\brand');
    }
}
