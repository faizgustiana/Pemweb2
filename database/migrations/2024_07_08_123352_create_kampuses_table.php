<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKampusesTable extends Migration
{
    public function up()
    {
        Schema::create('kampuses', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 20);
            $table->string('alamat', 45);
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kampuses');
    }
}