<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('department_id')->unsigned();
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->text('intro_ar')->nullable();
            $table->text('intro_en')->nullable();
            $table->text('vision_ar')->nullable();
            $table->text('vision_en')->nullable();
            $table->text('mission_ar')->nullable();
            $table->text('mission_en')->nullable();
            $table->text('message_ar')->nullable();
            $table->text('message_en')->nullable();
            $table->text('goal_ar')->nullable();
            $table->text('goal_en')->nullable();
            $table->text('values_ar')->nullable();
            $table->text('values_en')->nullable();
            $table->text('whyus_ar')->nullable();
            $table->text('whyus_en')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('youtube')->nullable();
            $table->string('googleplus')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('address_eg_ar')->nullable();
            $table->string('address_eg_en')->nullable();
            $table->string('address_uae_ar')->nullable();
            $table->string('address_uae_en')->nullable();
            $table->string('address_ksa_ar')->nullable();
            $table->string('address_ksa_en')->nullable();
            $table->string('email_egy')->nullable();
            $table->string('email_uae')->nullable();
            $table->string('email_ksa')->nullable();
            $table->string('phone_eg')->nullable();
            $table->string('phone_uae')->nullable();
            $table->string('phone_ksa')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
