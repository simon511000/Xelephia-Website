<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoutiqueArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutique_articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->foreignId('boutique_category_id');
            $table->foreign('boutique_category_id')->references('id')->on('boutique_categories')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->integer('price');
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boutique_articles');
    }
}
