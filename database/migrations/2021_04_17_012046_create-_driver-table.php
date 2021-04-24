<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('drivers', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('photo');
          $table->string('phone');
          $table->string('email');
          $table->string('password');
          $table->string('status');
          $table->foreignId('wilaya_id');
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
        Schema::dropIfExists('drivers');
    }
}
