<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_news');
            $table->unsignedBigInteger('id_user');
            $table->text('content');
            $table->dateTime('PublishDate')
            ->useCurrent();
            $table->boolean('IsBanned')
                ->default(0);
            $table->unsignedBigInteger('id_user_who_ban')
                ->nullable();
            $table->dateTime('date_ban')
                ->nullable();
            $table->timestamps();
//            indexes
            $table->index('id_news', 'forNews');
            $table->index('id_user', 'forUser');
            $table->index(['id_user','PublishDate'], 'forWievInNews');
//            Foreign Keys
//            FIXIT: Разобраться с внешними ключами
//            $table->foreign('id_news')->references('id')->on('newsCatalog');
//            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
