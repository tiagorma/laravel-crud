<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        //..o nome da tabela é o nome do model, em minúsculo e no plural.
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string("name", 50);
            $table->integer("year");
            $table->string("color", 30);
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
        Schema::dropIfExists('vehicles');
    }
};
