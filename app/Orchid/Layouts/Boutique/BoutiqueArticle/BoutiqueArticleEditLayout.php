<?php

namespace App\Orchid\Layouts\Boutique\BoutiqueArticle;

use App\Models\BoutiqueCategory;
use Orchid\Screen\Field;
use Orchid\Screen\Fields\Cropper;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Fields\Relation;
use Orchid\Screen\Fields\SimpleMDE;
use Orchid\Screen\Layouts\Rows;

class BoutiqueArticleEditLayout extends Rows
{
    /**
     * Get the fields elements to be displayed.
     *
     * @return Field[]
     */
    protected function fields(): array
    {
        return [
            Input::make('article.title')
                ->title('Nom')
                ->required(),
            Relation::make('article.category')
                ->title('Catégorie')
                ->required()
                ->fromModel(BoutiqueCategory::class, 'name'),
            SimpleMDE::make('article.description')
                ->title('Description'),
            Input::make('article.price')
                ->title('Prix')
                ->help('Le prix doit être en centime d\'€')
                ->type('number')
                ->required(),
            Cropper::make('article.image')
                ->title('Image')
                ->targetId()
            
        ];
    }
}
