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

        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->integer('idProveedor');
            $table->date('fecha');
            $table->string('descripcion');
            $table->float('total');
            $table->string('factura');
            $table->string('partida');
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
        Schema::dropIfExists('compras');
    }
};
