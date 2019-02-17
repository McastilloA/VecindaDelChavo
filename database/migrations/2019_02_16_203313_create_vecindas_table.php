<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVecindasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vecindas', function (Blueprint $table) {
            $table->increments('id');
            $table-> string('title');
            $table-> string('name');
            $table-> string('nickname');
            $table-> string('image')->default('default.png');
            $table-> string('apartament');
            $table-> string('description');
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
        Schema::create('vecindas', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
}
