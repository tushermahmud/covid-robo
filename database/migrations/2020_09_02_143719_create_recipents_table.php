<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plasma_recipent_name');
            $table->string('plasma_recipent_email')->unique();
            $table->string('plasma_recipent_phone');
            $table->text('covid_recipent_verified');
            $table->text('plasma_need_verified_doctor')->nullable();
            $table->text('recipent_blood_group');
            $table->integer('status')->default(0);
            $table->text('hospital_address');
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
/*        Schema::dropIfExists('recipents');*/
    }
}
