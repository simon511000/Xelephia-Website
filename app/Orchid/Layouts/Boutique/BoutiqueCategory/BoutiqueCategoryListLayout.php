<?php

namespace App\Orchid\Layouts\Boutique\BoutiqueCategory;

use App\Models\BoutiqueCategory;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BoutiqueCategoryListLayout extends Table
{
    /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'categories';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('name', 'Nom')
                ->sort()
                ->render(function(BoutiqueCategory $category) {
                    return Link::make($category->name)
                        ->route('platform.boutique.category.edit', $category->id);
                })
        ];
    }
}
