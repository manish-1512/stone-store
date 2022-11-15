<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductVariantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_matrial_id');
            $table->unsignedBigInteger('item_parent_id');
            $table->unsignedBigInteger('final_product_item_id');
            $table->decimal('price');
            $table->timestamps();
            $table->foreign('product_matrial_id')->references('id')->on('product_matrials')->onDelete('cascade');
            $table->foreign('final_product_item_id')->references('id')->on('final_product_items')->onDelete('cascade');
            $table->foreign('item_parent_id')->references('id')->on('final_product_items')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_addon_prices');
    }



}
