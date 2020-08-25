<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ActivitySkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_skill', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('skill_id')->unsigned()->comment('スキルID');
            $table->bigInteger('activity_id')->unsigned()->comment('アクティビティID');
            $table->foreign('skill_id')
                ->references('id')
                ->on('skills')
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
        Schema::dropIfExists('activity_skill');
    }
}
