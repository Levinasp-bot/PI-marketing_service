<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('business_categories', function (Blueprint $table) {
            $table->id('id_business_category', 5);
            $table->foreignId('id_product')->references('id_product')->on('product');
            $table->string('category', 20);
            $table->float('max_capacity');
            $table->string('description', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('business_category');
    }
};
