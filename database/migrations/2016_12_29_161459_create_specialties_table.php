<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specialties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 65);
            $table->text('description')->nullable();
            // Chave estrangeira de cidades
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
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
        Schema::dropIfExists('specialties');
    }
}
