<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UplodFile extends Model
{

    public function user()
    {
        return $this->belongsTo('App\Category');
    }
}
