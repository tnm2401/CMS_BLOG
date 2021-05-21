<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_post', function (Blueprint $table) {
            $table->id();
            $table->string('post_name');
            $table->string('post_description');
            $table->string('post_content');
            $table->string('post_slug')->nullable()->unique();
            $table->integer('post_type');
            $table->integer('post_group');
            $table->integer('post_view');
            $table->integer('post_special')->default(0);
            $table->integer('post_display')->default(1);
            $table->integer('user_id');
            $table->string('post_image');
            $table->integer('post_tag');
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
        Schema::dropIfExists('cms_post');
    }
}
