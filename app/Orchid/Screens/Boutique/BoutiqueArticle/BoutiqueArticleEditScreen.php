<?php

namespace App\Orchid\Screens\Boutique\BoutiqueArticle;

use Orchid\Screen\Screen;
use App\Models\BoutiqueArticle;
use Orchid\Screen\Actions\Button;
use App\Orchid\Layouts\Boutique\BoutiqueArticle\BoutiqueArticleEditLayout;
use Illuminate\Http\Request;
use Orchid\Support\Facades\Alert;

class BoutiqueArticleEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Créer un Article';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Article de la Boutique';

    public $permission = [
        'platform.boutique'
    ];

    /**
     * Query data.
     *
     * @return array
     */
    public function query(BoutiqueArticle $article): array
    {
        $this->exists = $article->exists;

        if($this->exists) {
            $this->name = 'Modifier un Article';
        }

        $article->load('attachment');

        // $article->load('category');

        return [
            'article' => $article
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
            Button::make('Créer')
                ->icon('pencil')
                ->method('createOrUpdate')
                ->canSee(!$this->exists),
            Button::make('Modifier')
                ->icon('note')
                ->method('createOrUpdate')
                ->canSee($this->exists),
            Button::make('Supprimer')
                ->icon('trash')
                ->method('remove')
                ->canSee($this->exists)
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
            BoutiqueArticleEditLayout::class
        ];
    }

    public function createOrUpdate(BoutiqueArticle $article, Request $request)
    {
        $article->fill($request->get('article'))->save();

        $article->attachment()->syncWithoutDetaching(
            $request->input('article.image', [])
        );

        Alert::info('L\'article a bien été enregisté.');

        return redirect()->route('platform.boutique.article.list');
    }
}
