<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCareersTable extends Migration
{

    public function up()
    {
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->date('last_date');
            $table->string('position');
            $table->string('slug')->index();
            $table->string('photo');
            $table->longText('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('careers');
    }
}
