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
            
            Schema::create('ventas', function (Blueprint $table) {
                $table->id();
                $table->int('idUsuario');
                $table->int('idBecado');
                $table->date('fecha');
                $table->string('productos');
                $table->string('nota');
                $table->float('total');
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
        Schema::dropIfExists('ventas');
    }
};
