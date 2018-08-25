<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
          $table->increments('id');
          $table->string('name');
          $table->string('description');
          $table->string('scale');
          $table->string('year_factory');
          $table->unsignedInteger('id_category');
          $table->foreign('id_category')->references('id')->on('categories')->onDelete('cascade');
          $table->integer('id_type');
          $table->unsignedInteger('id_image');
          $table->foreign('id_image')->references('id')->on('images')->onDelete('cascade');

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
