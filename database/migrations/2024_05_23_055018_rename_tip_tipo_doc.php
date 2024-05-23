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
        Schema::table('tip_tipo_docs', function (Blueprint $table) {
            $table->string('created_at')->after('tip_nombre');
            $table->string('updated_at')->after('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('tip_tipo_docs')) {
            if (Schema::hasColumn('tip_tipo_docs', 'updated_at')) {
                Schema::table('tip_tipo_docs', function (Blueprint $table) {
                    $table->dropColumn('updated_at');
                });
            }
        }
    }
};
