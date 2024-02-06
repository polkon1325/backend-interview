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
        Schema::create('product_table', function (Blueprint $table) {
            $table->id('product_id')->unique();
            $table->string('product_name', 100);
            $table->string('product_sku')->unique();
            $table->string('product_category_id');
            $table->string('product_category', 100);
            $table->string('product_description');
            $table->string('product_image')->nullable();
            $table->string('author_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_table');
    }
};


