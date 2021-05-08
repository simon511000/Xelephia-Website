<?php

namespace App\Orchid\Layouts\Boutique\BoutiqueArticle;

use App\Models\BoutiqueArticle;
use Orchid\Screen\Actions\Link;
use Orchid\Screen\Layouts\Table;
use Orchid\Screen\TD;

class BoutiqueArticleListLayout extends Table
{
     /**
     * Data source.
     *
     * The name of the key to fetch it from the query.
     * The results of which will be elements of the table.
     *
     * @var string
     */
    protected $target = 'articles';

    /**
     * Get the table cells to be displayed.
     *
     * @return TD[]
     */
    protected function columns(): array
    {
        return [
            TD::make('title', 'Nom')
                ->sort()
                ->render(function(BoutiqueArticle $article) {
                    return Link::make($article->title)
                        ->route('platform.boutique.article.edit', $article->id);
                }),
            TD::make('category_id', 'Categorie')
                ->sort()
                ->render(function(BoutiqueArticle $article) {
                    return $article->category->name;
                })
        ];
    }
}
