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
        Schema::create('suscription', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
            $table->string('details',50)->nullable();
            $table->dateTime('start_date', $precision = 0);
            $table->dateTime('end_date', $precision = 0);
            $table->enum('status',['Activa','Vencida','Cancelada'] )->default('Activa');
            $table->string('type_suscription',30);
            $table->double('price', 8, 8);
            $table->string('payment_method',50);
            $table->foreignId('buyer_id')->constrained('buyer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suscription');
    }
};
