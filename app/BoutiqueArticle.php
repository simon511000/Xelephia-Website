<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoutiqueArticle extends Model
{
    protected $table = 'boutique_article';

    public function categories(){
        return $this->belongsToMany(BoutiqueCategory::class);
    }

    public function getPrice()
    {
        $price = $this->price / 100;

        return number_format($price, 2, ',', ' ') . ' €';
    }
}
