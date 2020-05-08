<?php

namespace App\Http\Livewire;

use App\BoutiqueArticle;
use App\BoutiqueCategory;
use Livewire\Component;

class BoutiqueMain extends Component
{

    public $categorySelected;
    
    public $categories;

    public $articles;

    public $tabId;

    public function mount(BoutiqueCategory $categories){
        $this->categorySelected = $categories->first()->id;
        $this->categories = $categories->all();
        $this->articles = $categories->find($this->categorySelected)->articles;
        $this->tabId = uniqid();
        $this->emit('categoryChanged', $this->tabId);
    }

    public function updatedCategorySelected(){
        $categories = new BoutiqueCategory();
        $this->articles = $categories->find($this->categorySelected)->articles;
        $this->tabId = uniqid();
        $this->emit('categoryChanged', $this->tabId);
    }

    public function render()
    {
        return view('livewire.boutique-main');
    }
}
