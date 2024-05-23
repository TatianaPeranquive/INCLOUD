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
        Schema::create('pro_procesos', function (Blueprint $table) {
            $table->bigIncrements('pro_id');
            $table->string('pro_prefijo', 20);
            $table->string('pro_nombre', 60);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_procesos');
    }
};
