<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class BoutiqueCategory extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function articles(){
        return $this->BelongsToMany(BoutiqueArticle::class, 'boutique_category_articles');
    }
}
