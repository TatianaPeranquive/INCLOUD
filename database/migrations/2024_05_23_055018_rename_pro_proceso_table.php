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
        Schema::table('pro_procesos', function (Blueprint $table) {
            $table->string('created_at')->after('pro_nombre');
            $table->string('updated_at')->after('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('pro_procesos')) {
                if (Schema::hasColumn('proc_procesos', 'updated_at')) {
                Schema::table('proc_procesos', function (Blueprint $table) {
                    $table->dropColumn('updated_at');
                });
            }
        }
    }
};
