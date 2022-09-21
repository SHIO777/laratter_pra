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
    public function up()
    {
        Schema::table('tweets', function (Blueprint $table) {
            // lecture 6.13
            // https://readouble.com/laravel/9.x/ja/migrations.html
            // after('column'): カラムを別のカラムの「後に」配置
            // constrained('new_table_name'): テーブル名がLaravelの規則
                //と一致しない場合は引数にテーブル名を指定する
            // cascadeOnDelete(): 削除したユーザーのツイートも削除
            $table->foreignId('user_id')
                  ->after('id')
                  ->nullable()
                  ->constrained()
                  ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tweets', function (Blueprint $table) {
            $table->dropForeign(['user_id']);       // 関連外す
            $table->dropColumn(['user_id']);        // user_idカラムを削除
        });
    }
};
