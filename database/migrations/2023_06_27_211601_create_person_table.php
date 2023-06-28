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
        Schema::create('person', function (Blueprint $table) {
            $table->id();
            $table->string('type_doc',30);
            $table->string('nro_doc',30);
            $table->string('firstname',30);
            $table->string('surname',50);
            $table->string('email',30);
            $table->string('address',50);
            $table->string('phone',30);
            $table->enum('gender',['M','F']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('person');
    }
};
