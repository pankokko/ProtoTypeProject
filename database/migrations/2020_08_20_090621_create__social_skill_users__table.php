<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSocialSkillUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill_user', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned()->comment('ユーザーID');
            $table->bigInteger('skill_id')->unsigned()->comment('ソーシャルスキルID');
            $table->integer('rate')->nullable()->comment('自己評価0~5までの6段階評価(0 ,1 ,2 , 3, 4, 5)');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('restrict')
                ->onDelete('cascade');
            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
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
        Schema::dropIfExists('skill_user');
    }
}
