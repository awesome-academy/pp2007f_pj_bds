<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->nullable(false);
            $table->smallInteger('type')->nullable(false);
            $table->smallInteger('post_type_id')->nullable(false);
            $table->integer('price')->nullable(true);
            $table->string('unit')->nullable(true);
            $table->integer('area')->nullable(true);
            $table->integer('provinces_id')->nullable(false);
            $table->integer('districts_id')->nullable(false);
            $table->integer('wards_id')->nullable(false);
            $table->smallInteger('number_of_bedroom')->nullable(true);;
            $table->smallInteger('number_of_restroom')->nullable(true);
            $table->smallInteger('number_of_floor')->nullable(true);
            $table->string('address',250)->nullable(false);
            $table->text('content')->nullable(false);
            $table->integer('views')->nullable(true);
            $table->integer('image_id')->nullable(true);
            $table->text('slug')->nullable(true);
            $table->integer('menu_category_id')->nullable(true);
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
        Schema::dropIfExists('products');
    }
}
