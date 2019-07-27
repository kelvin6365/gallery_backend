<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('embedded_url');
            $table->boolean('isAvgle');
            $table->boolean('hd');
            $table->string('preview_url');
            $table->string('preview_video_url');
            $table->string('title');
            $table->string('video_url');
            $table->float('duration');
            $table->bigInteger('viewnumber')->default(0);
            $table->string('keyword');
            $table->bigInteger('like')->default(0);
            $table->bigInteger('dislike')->default(0);
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
        Schema::dropIfExists('videos');
    }
}
