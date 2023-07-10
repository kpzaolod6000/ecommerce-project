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
        Schema::create('shopping_cart', function (Blueprint $table) {
            $table->id();
            $table->dateTime('start_date', $precision = 0);
            $table->integer('quantity');
            $table->double('sale_price', 8, 8);
            $table->enum('status',['Activa','Cancelada', 'Desactivada'])->default('Desactivada');
            $table->foreignId('product_id')->constrained('product');
            $table->foreignId('buyer_id')->constrained('buyer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shopping_cart');
    }
};
