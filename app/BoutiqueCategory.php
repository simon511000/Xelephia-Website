<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoutiqueCategory extends Model
{
    protected $table = 'boutique_category';

    public $timestamps = false;

    public function articles(){
        return $this->belongsToMany(BoutiqueArticle::class);
    }
}
