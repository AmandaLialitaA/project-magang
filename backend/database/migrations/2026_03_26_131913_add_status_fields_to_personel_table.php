<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('personel', function (Blueprint $table) {
            $table->date('cuti_mulai')->nullable()->after('status_personel');
            $table->date('cuti_selesai')->nullable()->after('cuti_mulai');
            $table->string('pendidikan_lokasi')->nullable()->after('cuti_selesai');
            $table->date('pensiun_mulai')->nullable()->after('pendidikan_lokasi');
        });
    }

    public function down(): void
    {
        Schema::table('personel', function (Blueprint $table) {
            $table->dropColumn(['cuti_mulai', 'cuti_selesai', 'pendidikan_lokasi', 'pensiun_mulai']);
        });
    }
};