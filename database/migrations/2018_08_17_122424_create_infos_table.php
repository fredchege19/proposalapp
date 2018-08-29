<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('organisation')->nullable();
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('submitted_by');
            $table->string('summary', 500);
            $table->string('background', 500)->nullable();
            $table->string('activities', 500);
            $table->string('budget', 500);
            $table->boolean('accepted1')->default(0);
            $table->boolean('accepted2')->default(0);
            $table->boolean('rejected')->default(0);
            $table->boolean('new')->default(1);

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
        Schema::dropIfExists('infos');
    }
}
