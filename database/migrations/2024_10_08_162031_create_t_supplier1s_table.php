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
        Schema::create('t_supplier1s', function (Blueprint $table) {
            $table->char("kodeSupplier", length:12)->unique();
            $table->char("namaSupplier", length:40)->unique();
            $table->char("noHPSupplier", length:15)->unique();
            $table->char("alamatSupplier", length:32);
            $table->integer("id")->unique();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('t_supplier1s');
    }
};
