<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAmazonProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('amazon_products', function (Blueprint $table) {
            $table->id();
            $table->string('product_brand');
            $table->string('product_images');
            $table->integer('product_price');
            $table->string('specification');
            $table->foreignId('category_id');

            $table->timestamps();


            $table->foreign('category_id')
            ->references('id')
              ->on('category')
              ->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('amazon_products');
    }
}
