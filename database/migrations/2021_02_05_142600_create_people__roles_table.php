<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people__roles', function (Blueprint $table) {
            $table->id();


            $table->bigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('roles')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->bigInteger('people_id');
            $table->foreign('people_id')->references('id')->on('people')
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
        Schema::dropIfExists('people__roles');
    }
}
