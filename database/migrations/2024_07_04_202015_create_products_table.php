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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'slug');
            $table->string(column: 'name');
            $table->string(column: 'description');
            $table->double(column: 'price');
            $table->string(column: 'sku');
            $table->integer(column: 'quantity');
            $table->boolean(column: 'is_published')->default(value: true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
