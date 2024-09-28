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
        Schema::create('employees', function (Blueprint $table) {
            $table->id(); // Первичный ключ
            $table->string('first_name'); // Имя сотрудника, обязательное
            $table->string('last_name'); // Фамилия сотрудника, обязательное
            $table->foreignId('company_id')->constrained()->onDelete('cascade'); // Внешний ключ на компанию
            $table->string('email')->nullable(); // Email сотрудника, необязательное
            $table->string('phone')->nullable(); // Телефон сотрудника, необязательное
            $table->timestamps(); // Добавляет created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
