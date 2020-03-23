<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsCatalogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('newsCatalog');
        Schema::create('newsCatalog', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_category')
            ->comment('ID категории');
            $table->string('title', 100)
            ->comment('Заголовок статьи');
            $table->text('content')
            ->comment('Содержание статьи');
            $table->boolean('IsActive')
            ->default('1')
            ->comment('Состояние новости');
            $table->timestamps();
            $table->foreign('id_category')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsCatalog');
    }
}
