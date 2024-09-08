<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     /*PHP/Laravel 14 投稿データを保存しよう 課題４↓ */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            //名前を保存するカラム
            $table->string('name');
            //性別を保存するカラム
            $table->string('gender');
             //趣味を保存するカラム
             $table->text('hobby');
              //自己紹介を保存するカラム
            $table->text('introduction');

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
        Schema::dropIfExists('profiles');
    }
};
