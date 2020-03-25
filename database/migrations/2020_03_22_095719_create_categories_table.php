<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('categories');
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Name',50)
            ->comment('Название Категории');
            $table->string('Desc',150)
            ->comment('Описание Категории');
            $table->boolean('IsActive')
            ->default('1')
            ->comment('Состояние категории');
            $table->timestamps();
            $table->index('IsActive', 'active');
            $table->unique('Name');
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
