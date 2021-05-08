<?php

namespace App\Orchid\Screens\Boutique\BoutiqueCategory;

use Orchid\Screen\TD;
use Orchid\Screen\Screen;
use Orchid\Screen\Actions\Link;
use App\Models\BoutiqueCategory;
use App\Orchid\Layouts\Boutique\BoutiqueCategory\BoutiqueCategoryListLayout;

class BoutiqueCategoryListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Catégories';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Catégories de la Boutique';

    public $permission = [
        'platform.boutique'
    ];

    /**
     * Query data.
     *
     * @return array
     */
    public function query(): array
    {
        return [
            'categories' => BoutiqueCategory::filters()->defaultSort('name')->paginate()
        ];
    }

    /**
     * Button commands.
     *
     * @return \Orchid\Screen\Action[]
     */
    public function commandBar(): array
    {
        return [
            Link::make('Créer une nouvelle catégorie')
                ->icon('pencil')
                ->route('platform.boutique.category.edit')
        ];
    }

    /**
     * Views.
     *
     * @return \Orchid\Screen\Layout[]|string[]
     */
    public function layout(): array
    {
        return [
            BoutiqueCategoryListLayout::class
        ];
    }
}
