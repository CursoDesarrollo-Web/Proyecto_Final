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
        Schema::create('materiasprimas', function (Blueprint $table) {
            $table->id();  // ID auto-incremental
            $table->string('nombre');
            $table->text('descripcion')->nullable();
            $table->string('unidad_medida');
            $table->decimal('cantidad', 10, 2)->default(0);  // Cantidad en inventario
            $table->decimal('precio_unitario', 15, 2);
            $table->unsignedBigInteger('proveedor_id');
            $table->date('fecha_adquisicion')->nullable();
            $table->date('fecha_expiracion')->nullable();
            $table->enum('estado', ['activa', 'inactiva']); 
            $table->timestamps();
    
            // Relación con la tabla proveedores
            $table->foreign('proveedor_id')->references('id')->on('proveedores')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiasprimas');
    }
};
