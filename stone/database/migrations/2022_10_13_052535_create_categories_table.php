<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('parent_id');
            $table->string('name', 100);
            $table->string('hindi_name', 100)->nullable();
            $table->integer('order');
            $table->string('banner');
            $table->text('short_description')->nullable();
            $table->text('description');
            $table->integer('is_active')->default(1);
            $table->integer('is_deleted')->default(0);
            $table->dateTime('created_at')->useCurrent();
            $table->dateTime('updated_at');
            $table->string('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
