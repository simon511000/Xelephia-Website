<?php

namespace App\Orchid\Screens\Boutique\BoutiqueArticle;

use Orchid\Screen\Screen;
use App\Models\BoutiqueArticle;
use App\Orchid\Layouts\Boutique\BoutiqueArticle\BoutiqueArticleListLayout;
use Orchid\Screen\Actions\Link;

class BoutiqueArticleListScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Articles';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Articles de la Boutique';

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
            'articles' => BoutiqueArticle::filters()->defaultSort('boutique_category_id')->paginate()
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
            Link::make('Ajouter un nouvel article')
                ->icon('pencil')
                ->route('platform.boutique.article.edit')
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
            BoutiqueArticleListLayout::class
        ];
    }
}
