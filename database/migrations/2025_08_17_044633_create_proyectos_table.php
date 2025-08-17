<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('proyectos', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->date('fecha_inicio');
        $table->string('estado');
        $table->string('responsable');
        $table->decimal('monto', 10, 2);
        $table->unsignedBigInteger('created_by'); 
        $table->timestamps();

        $table->foreign('created_by')->references('id')->on('usuarios')->onDelete('cascade');
    });
}
 

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
