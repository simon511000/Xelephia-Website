<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoutiqueArticle extends Model
{
    protected $table = 'boutique_article';

    public function categories(){
        return $this->belongsToMany(BoutiqueCategory::class);
    }
}
