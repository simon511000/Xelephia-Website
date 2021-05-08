<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Orchid\Attachment\Attachable;

class BoutiqueArticle extends Model
{
    use HasFactory;
    use AsSource, Filterable, Attachable;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'boutique_categories_id',
        'description',
        'price',
        'image'
    ];

    protected $allowedSorts = [
        'title',
        'boutique_category_id'
    ];

    public function category(){
        return $this->belongsTo(BoutiqueCategory::class, 'boutique_category_id');
    }
}
