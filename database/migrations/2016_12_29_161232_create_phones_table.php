<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->increments('id');
            $table->char('ddd', 2);
            $table->string('number', 10);
            $table->enum('type', ['fix', 'cell']);
            // chaves estrangeira
            $table->integer('professional_id')->unsigned();
            $table->foreign('professional_id')
                ->references('id')
                ->on('professionals')
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
        Schema::dropIfExists('phones');
    }
}
