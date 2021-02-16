<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiudataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biudata', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->string('address');
            $table->integer('contact');
            $table->date('birthday');
            $table->integer('age');
            $table->text('origin');
            $table->text('transpo');
            $table->date('departure');
            $table->date('arrival');
            $table->string('ticket');
            $table->string('proof');
            $table->string('schedule');
            $table->string('coor');
            $table->string('endorse');
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
        Schema::dropIfExists('biudata');

    }
}
