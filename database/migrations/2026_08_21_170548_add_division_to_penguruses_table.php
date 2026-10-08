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
        Schema::table('penguruses', function (Blueprint $table) {
            $table->foreignId('division_id')->nullable()->constrained()->onDelete('set null');
            $table->integer('level')->default(5); // 1:Ketua, 2:Wakil, 3:Sekretaris, 4:Bendahara, 5:Anggota
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penguruses', function (Blueprint $table) {
            $table->dropForeign(['division_id']);
            $table->dropColumn(['division_id', 'level']);
        });
    }
};
