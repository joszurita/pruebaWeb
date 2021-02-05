<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('nameUser');
            $table->string('nameComplete');
            $table->string('email');
            $table->string('number');
            $table->string('age');
            $table->string('dayBirthday');

            $table->bigInteger("configuration_id")->nullable();
            $table->foreign('configuration_id')->references('id')->on('configurations')
                                        ->onDelete('cascade')
                                        ->onUpdate('cascade');

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
        Schema::dropIfExists('people');
    }
}
