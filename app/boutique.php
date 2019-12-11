<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boutique extends Model
{
    public function boutique(){
        return $this->belongsTo('App\boutique');
    }
}
