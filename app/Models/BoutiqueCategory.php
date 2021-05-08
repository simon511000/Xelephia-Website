<?php

namespace App\Models;

use Orchid\Screen\AsSource;
use Orchid\Filters\Filterable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BoutiqueCategory extends Model
{
    use HasFactory;
    use AsSource, Filterable;

    public $timestamps = false;

    protected $fillable = [
        'name'
    ];

    protected $allowedSorts = [
        'name'
    ];

    public function articles(){
        return $this->hasMany(BoutiqueArticle::class);
    }
}
