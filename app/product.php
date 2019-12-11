<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name','id_category','name','description','prix','quantite'];

    public function category(){
        return $this->belongsTo('App\category');
    }
}
