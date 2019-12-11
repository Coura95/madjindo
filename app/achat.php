<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class achat extends Model
{
    public function product(){
        return $this->belongsTo('App\Product');
    }

    public function achats(){
        return $this->hasMany("App\Achat");
    }

}
