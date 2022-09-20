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
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipo_id');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('modelo_id');
            $table->unsignedBigInteger('cor_id');
            $table->unsignedBigInteger('tipo_medida_id');
            $table->unsignedBigInteger('combustivel_id');
            $table->unsignedBigInteger('categoria_cnh_id');
            $table->unsignedBigInteger('departamento_id');

            $table->string('placa', 10);
            $table->string('chassi', 20);
            $table->string('renavam', 20);
            $table->double('medida_atual');
            $table->date('data_aquisicao');
            $table->date('ano_fabricacao');
            $table->date('ano_modelo');
            $table->integer('capacidade_tanque');
            $table->integer('capacidade_passageiros');
            $table->timestamps();

            //Constraint
            $table->foreign('tipo_id')->references('id')->on('tipos');
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('modelo_id')->references('id')->on('modelos');
            $table->foreign('cor_id')->references('id')->on('cores');
            $table->foreign('tipo_medida_id')->references('id')->on('tipos_medidas');
            $table->foreign('combustivel_id')->references('id')->on('combustiveis');
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
        Schema::dropIfExists('veiculos');
    }
};
