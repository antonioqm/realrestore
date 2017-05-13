<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessionalSpecialityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals_specialities', function (Blueprint $table) {
            $table->increments('id');
            // Relacionamento com Profissional
            $table->integer('professional_id')->unsigned();
            $table->foreign('professional_id')
                ->references('id')
                ->on('professionals')
                ->onDelete('cascade');
            // Relacionamento com especialidade
            $table->integer('specialty_id')->unsigned();
            $table->foreign('specialty_id')
                ->references('id')
                ->on('specialties')
                ->onDelete('cascade');
            // //  // Relacionamento com Cidades
            // $table->integer('city_id')->unsigned();
            // $table->foreign('city_id')
            //     ->references('id')
            //     ->on('cities')
            //     ->onDelete('cascade');
            

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionals_specialities');
    }
}
