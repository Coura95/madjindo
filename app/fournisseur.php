<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fournisseur extends Model
{
    public function boutiques(){
        return $this->hasMany("App\boutique");
    }
}
