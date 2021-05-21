<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsTypePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_type_post', function (Blueprint $table) {
            $table->id();
            $table->string('type_name');
            $table->integer('type_group');
            $table->string('type_slug')->nullable()->unique();
            $table->integer('type_special')->default(0);
            $table->integer('type_display')->default(1);
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
        Schema::dropIfExists('cms_type_post');
    }
}
