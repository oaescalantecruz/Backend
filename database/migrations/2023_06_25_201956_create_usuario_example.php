<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id();
            $table->string("nombres");
            $table->string("apellidos");
            $table->string("tipoId");
            $table->integer("identificacion");
            $table->string("telefono");
            $table->string("emailUser");
            $table->string("profesion");
            $table->enum('rol', ['Administrador','Visualizador','Ejecutor','Invitado']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario');
    }
};
