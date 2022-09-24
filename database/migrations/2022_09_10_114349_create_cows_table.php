<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cows', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->date('cowTarik');
            $table->integer('serial_coedeve');
            $table->string('farmers_name');
            $table->string('fat_name');
            $table->string('vill');
            $table->tinyInteger('mobile');
            $table->string('gat');
            $table->string('old_cow');
            $table->string('color_ofbody');
            $table->tinyInteger('num_culf');
            $table->decimal('amount_milk');
            $table->tinyInteger('period_milk');
            $table->tinyInteger('total_milk');
            $table->string('remark');
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
        Schema::dropIfExists('cows');
    }
}
