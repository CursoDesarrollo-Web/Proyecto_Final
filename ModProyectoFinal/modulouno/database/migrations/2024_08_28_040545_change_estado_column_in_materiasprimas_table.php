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
        Schema::table('materiasprimas', function (Blueprint $table) {
            $table->enum('estado', ['activa', 'inactiva'])->default('activa')->change();
        });
    }
    
    public function down()
    {
        Schema::table('materiasprimas', function (Blueprint $table) {
            $table->boolean('estado')->default(true)->change();
        });
    }

};
