<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoutiqueCategoryArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutique_category_articles', function (Blueprint $table) {
            $table->foreignId('boutique_category_id');
            $table->foreignId('boutique_article_id');

            $table->foreign('boutique_category_id')->references('id')->on('boutique_categories')->onDelete('CASCADE');
            $table->foreign('boutique_article_id')->references('id')->on('boutique_articles')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boutique_category_articles');
    }
}
