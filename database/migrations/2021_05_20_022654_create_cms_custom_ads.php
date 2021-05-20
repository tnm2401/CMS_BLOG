<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsCustomAds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_custom_ads', function (Blueprint $table) {
            $table->id();
            $table->integer('ads_serial');
            $table->string('ads_title');
            $table->string('ads_location');
            $table->string('ads_image');
            $table->integer('ads_display');
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
        Schema::dropIfExists('cms_custom_ads');
    }
}
