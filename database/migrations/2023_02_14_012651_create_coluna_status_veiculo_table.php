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
        //criando coluna status depois da coluna ID
        Schema::table('veiculos', function (Blueprint $table) {
            $table->enum('status', ['disponivel', 'em_uso', 'em_manutencao'])->default('disponivel')->after('id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //removendo coluna status
        Schema::table('veiculos', function (Blueprint $table){
            $table->dropColumn('status');
        });

    }
};
