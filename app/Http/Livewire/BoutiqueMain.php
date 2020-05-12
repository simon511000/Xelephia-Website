<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\BoutiqueArticle;
use App\BoutiqueCategory;
use Gloudemans\Shoppingcart\Facades\Cart;

class BoutiqueMain extends Component
{

    public $categorySelected;
    
    public $categories;

    public $articles;

    public $articleSelected;

    public $listeners = [
    ];

    public function mount(BoutiqueCategory $categories){
        $this->categorySelected = $categories->first()->id;
        $this->categories = $categories->all();
        $this->articles = $categories->find($this->categorySelected)->articles;
        $this->articleSelected = $this->articles->first();
    }

    public function updatedCategorySelected(){
        $categories = new BoutiqueCategory();
        $this->articles = $categories->find($this->categorySelected)->articles;
        $this->articleSelected = $this->articles->first();
    }

    public function setArticleSelected($articleId){
        $this->articleSelected = $this->articles->find($articleId);
    }

    public function ajouterPanier($article){
        $article = $this->articles->where('id', $article)->first();
        Cart::add($article->id, $article->title, 1, $article->price)
            ->associate('App\BoutiqueArticle');
        $this->emit('productAddedToCart');
        
    }

    public function render()
    {
        return view('livewire.boutique-main');
    }
}
