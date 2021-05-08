<?php

namespace App\Orchid\Layouts\Boutique\BoutiqueCategory;

use Orchid\Screen\Fields\Input;
use Orchid\Screen\Layout;
use Orchid\Screen\Layouts\Rows;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BoutiqueCategoryEditLayout extends Rows
{
    /**
     * Views.
     *
     * @return Field[]
     */
    public function fields(): array
    {
        return [
            Input::make('category.name')
                ->title('Nom')
                ->placeholder('Nom de la catégorie')
                ->required()
        ];
    }
}
