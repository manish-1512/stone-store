<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {

		$table->id();
		$table->unsignedBigInteger('parent_id')->nullable();
		$table->string('label_id')->nullable();
		$table->string('name',100);
		$table->string('hindi_name',100)->nullable();
		$table->integer('order');
		$table->string('banner');
		$table->string('image');
		$table->text('short_description')->nullable();
		$table->text('description')->nullable();
		$table->boolean('is_active')->default('1');
		$table->dateTime('is_deleted')->nullable();
		$table->string('slug');
		$table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('categories');
    }
}