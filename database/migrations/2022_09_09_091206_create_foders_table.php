<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFodersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->integer('fodMOnth');
            $table->string('ferName');
            $table->string('mob');
            $table->string('ghasName');
            $table->string('landAmo');
            $table->string('Production');
            $table->string('motFod');
            $table->string('motSel');
            $table->string('mark');
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
        Schema::dropIfExists('foders');
    }
}
