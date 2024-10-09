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
        Schema::create('t_bahanbakus', function (Blueprint $table) {
            $table->char("kodeBahanBaku", length:12)->unique();
            $table->char("jenisBahanBaku", length:32)->unique();
            $table->integer("id")->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_bahanbakus');
    }
};
