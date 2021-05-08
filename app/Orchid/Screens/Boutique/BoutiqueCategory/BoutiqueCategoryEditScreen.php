<?php

namespace App\Orchid\Screens\Boutique\BoutiqueCategory;

use App\Models\BoutiqueCategory;
use App\Orchid\Layouts\Boutique\BoutiqueCategory\BoutiqueCategoryEditLayout;
use Illuminate\Http\Request;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Fields\Input;
use Orchid\Screen\Screen;
use Orchid\Support\Facades\Alert;
use Orchid\Support\Facades\Layout;

class BoutiqueCategoryEditScreen extends Screen
{
    /**
     * Display header name.
     *
     * @var string
     */
    public $name = 'Créer une Catégorie';

    /**
     * Display header description.
     *
     * @var string|null
     */
    public $description = 'Catégories de la boutiques';

    public $exists = false;

    public $permission = [
        'platform.boutique'
    ];

    /**
     * Query data.
     *
     * @return array
     */
    public function query(BoutiqueCategory $category): array
    {
        $this->exists = $category->exists;

        if($this->exists) {
            $this->name = 'Modifier une Catégorie';
        }

        return [
            'category' => $category
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
            BoutiqueCategoryEditLayout::class
        ];
    }

    public function createOrUpdate(BoutiqueCategory $category, Request $request)
    {
        $category->fill($request->get('category'))->save();

        Alert::info('La catégorie a bien été sauvegardé.');

        return redirect()->route('platform.boutique.category.list');
    }

    public function remove(BoutiqueCategory $category)
    {
        $category->delete();

        Alert::info('La catégorie a bien été supprimé.');

        return redirect()->route('platform.boutique.category.list');
    }
}
