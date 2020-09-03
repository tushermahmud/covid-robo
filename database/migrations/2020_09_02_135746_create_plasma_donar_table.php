<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlasmaDonarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plasma_donar_name');
            $table->string('plasma_donar_email');
            $table->string('plasma_donar_phone');
            $table->text('covid_verified');
            $table->text('covid_recovered')->nullable();
            $table->text('donar_blood_group');
            $table->integer('status')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donars');
    }
}
