<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableActivityUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->comment('ユーザーID');
            $table->bigInteger('activity_id')->unsigned()->comment('ソーシャルスキルID');
            $table->date('started_at')->nullable()->comment('開始時期');
            $table->date('finished_at')->nullable()->comment('終了時期');
            $table->date('is_continue')->nullable()->comment('既に辞めている or 不明 = null, 継続中 = 日付が入る');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->foreign('activity_id')
                ->references('id')
                ->on('activities')
                ->onUpdate('restrict')
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
        Schema::dropIfExists('activity_user');
    }
}
