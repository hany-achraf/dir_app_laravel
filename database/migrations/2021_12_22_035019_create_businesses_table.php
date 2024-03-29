<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('icon_img_path');
            $table->string('cover_img_path');
            $table->text('description')->nullable();
            $table->string('phone_no');
            $table->string('address');
            $table->text('iframe_on_google_maps')->nullable();
            $table->string('link_on_google_maps')->nullable();
            $table->string('working_time');
            $table->string('website_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->bigInteger('destination_id')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('destination_id')->references('id')->on('destinations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('businesses');
    }
}
