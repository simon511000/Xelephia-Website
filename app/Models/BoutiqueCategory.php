<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Orchid\Screen\AsSource;

class BoutiqueCategory extends Model
{
    use HasFactory;
    use AsSource;

    protected $guarded = [];
    public $timestamps = false;

    public function articles(){
        return $this->BelongsToMany(BoutiqueArticle::class, 'boutique_category_articles');
    }
}
