<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorie_restaurants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('categorie_id')->references('id')->on('categories')->onDeleteCascade();
            $table->foreignId('restaurant_id')->references('id')->on('restaurants')->onDeleteCascade();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categorie_restaurants');
    }
};
