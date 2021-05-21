<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsGroupPost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_group_post', function (Blueprint $table) {
            $table->id();
            $table->string('group_name');
            $table->integer('group_serial');
            $table->integer('group_special')->default(0);
            $table->string('group_slug')->nullable()->unique();
            $table->integer('group_display')->default(1);
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
        Schema::dropIfExists('cms_group_post');
    }
}
