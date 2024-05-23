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
        Schema::create('doc_documento', function (Blueprint $table) {
            $table->bigIncrements('doc_id');
            $table->string('doc_nombre', 60);
            $table->integer('doc_codigo');
            $table->string('doc_contenido', 4000);

            $table->foreignId('doc_id_proceso')->references("pro_id")->on("pro_procesos");
            $table->foreignId('doc_id_tipo')->references("tip_id")->on("tip_tipo_docs");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doc_documento');
    }
};
