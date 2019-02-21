<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemon', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name');
            $table->string('types');
            $table->double('height', 8, 2);
            $table->double('weight', 8, 2);
            $table->string('abilities');
            $table->integer('hp');
            $table->integer('speed');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('specialDefense');
            $table->integer('specialAttack');
            $table->string('egg_groups');
            $table->string('genus');
            $table->string('description');
            $table->string('captured_by')->nullable();
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
        Schema::dropIfExists('pokemon');
    }
}
