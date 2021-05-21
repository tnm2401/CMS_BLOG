<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TaoBangTinVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_videos', function (Blueprint $table) {
            $table->id();
            $table->string('video_name');
            $table->string('video_description');
            $table->string('video_slug')->nullable()->unique();
            $table->integer('video_group');
            $table->integer('video_view');
            $table->integer('video_special')->default(0);
            $table->integer('video_display')->default(1);
            $table->integer('user_id');
            $table->string('video_image');
            $table->integer('video_tag');
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
        Schema::dropIfExists('cms_videos');
    }
}
