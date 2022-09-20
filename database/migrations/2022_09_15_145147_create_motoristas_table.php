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
        Schema::create('motoristas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categoria_cnh_id');
            $table->unsignedBigInteger('departamento_id');
            $table->string('nome', 40);
            $table->string('matricula');
            $table->string('registro_habilitacao');
            $table->date('validade_cnh');
            $table->date('primeira_habilitacao');
            $table->timestamps();

            //Constraint
            $table->foreign('categoria_cnh_id')->references('id')->on('categoria_cnhs');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('motoristas');
    }
};
