<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEverlistmastersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('everlistmasters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('ownername');
            $table->string('phno');
            $table->string('address');
            $table->unsignedBigInteger('everlisttype_id');
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('everlistmasters');
    }
}
