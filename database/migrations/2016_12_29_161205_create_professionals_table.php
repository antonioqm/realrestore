<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['PF', 'PJ'])->nullable();
            $table->enum('sex', ['F', 'M'])->nullable();
            $table->enum('doctor', ['S', 'N'])->nullable();
            $table->string('pt', 10)->nullable();
            $table->string('name', 65);
            $table->string('metts')->nullable(); // atende tradução livre
            $table->string('register')->nullable();
            $table->string('key_words')->nullable();

            //  // Relacionamento com Cidades
            // $table->integer('city')->unsigned();
            // $table->foreign('city')
            //     ->references('id')
            //     ->on('cities')
            //     ->onDelete('cascade');
            // Relacionamento com endereço
            // $table->integer('address_id')->unsigned();
            // $table->foreign('address_id')
            //     ->references('id')
            //     ->on('addresses')
            //     ->onDelete('cascade');
           // Relacionamento com endereço
            // $table->integer('phone_id')->unsigned();
            // $table->foreign('phone_id')
            //     ->references('id')
            //     ->on('phones')
            //     ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionals');

    }
}
