<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Simon Ledoux',
            'email' => 'simon@simon511000.fr'
        ]);

        \App\Models\BoutiqueCategory::factory(10)->create()->each(function($category){
            $articles = \App\Models\BoutiqueArticle::factory(15)->make();
            $category->articles()->saveMany($articles);
        });
    }
}
