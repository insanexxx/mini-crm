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
        Schema::create('companies', function (Blueprint $table) {
            $table->id(); // Первичный ключ
            $table->string('name'); // Название компании, обязательное
            $table->string('email')->nullable(); // Email компании, необязательное
            $table->string('logo')->nullable(); // Логотип компании, необязательное
            $table->string('website')->nullable(); // Адрес сайта компании, необязательное
            $table->timestamps(); // Добавляет created_at и updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
