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
        Schema::rename('doc_documento','doc_documentos');
        Schema::table('doc_documentos', function (Blueprint $table) {
            $table->string('created_at')->after('doc_contenido');
            $table->string('updated_at')->after('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('doc_documentos')) {
            Schema::rename('doc_documentos','doc_documento');
            if (Schema::hasColumn('doc_documentos', 'updated_at')) {
                Schema::table('doc_documentos', function (Blueprint $table) {
                    $table->dropColumn('updated_at');
                });
            }
        }
    }
};
