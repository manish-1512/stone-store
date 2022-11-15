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
            $table->string('slug');
            $table->text('description');
            $table->boolean('status')->default(1);
            $table->text('specifications');
            $table->string('image');
            $table->text('gallery_images');
            $table->string('sku');
            $table->bigInteger('category_id');
            $table->decimal('price');
            $table->decimal('sale_price');
            $table->boolean('stock_status')->default(1);
            $table->integer('quantity');
            $table->string('available_to_create')->comment('in this colum we save what kind of item we create form this product like ring,pandent etc.this colum relate to the final_product_items table ids');
            $table->boolean('disappear_after_order')->comment('these kind of products is not show after order');
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
