<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('clinic', 65)->nullable(); //
            $table->string('thoroughfare', 15)->nullable(); // logradouro
            $table->string('address')->nullable(); // endereço
            $table->string('district')->nullable(); // bairro
            $table->string('complement')->nullable();
            // chave estrangeira cidade
            $table->integer('city_id')->unsigned();
            $table->foreign('city_id')
                ->references('id')
                ->on('cities')
                ->onDelete('cascade');
            // chave estrangeira profissional
            // $table->integer('professional_id')->unsigned();
            // $table->foreign('professional_id')
            //     ->references('id')
            //     ->on('professionals')
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
        Schema::dropIfExists('addresses');
    }
}
