<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressProfessionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses_professionals', function (Blueprint $table) {
            $table->increments('id');
                        // Relacionamento com Profissional
            $table->integer('professional_id')->unsigned();
            $table->foreign('professional_id')
                ->references('id')
                ->on('professionals')
                ->onDelete('cascade');
            // Relacionamento com especialidade
            $table->integer('address_id')->unsigned();
            $table->foreign('address_id')
                ->references('id')
                ->on('addresses')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses_professionals');
    }
}
