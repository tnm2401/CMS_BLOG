<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCmsCustomPage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_custom_page', function (Blueprint $table) {
            $table->id();
            $table->string('site_name');
            $table->string('site_logo');
            $table->string('site_slogan');
            $table->string('site_email');
            $table->string('site_phone');
            $table->string('site_logo_footer');
            $table->string('site_favicon');
            $table->string('site_address');
            $table->string('site_version');
            $table->string('site_copyright');
            $table->string('site_active');
            $table->integer('site_protect')->default(0);
            $table->integer('site_maintance')->default(0);
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
        Schema::dropIfExists('cms_custom_page');
    }
}
