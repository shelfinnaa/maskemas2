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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->decimal('price')->default(0.0);
            $table->integer('quantity');
            $table->decimal('total_price');
            $table->string('estimated_arrival')->nullable();

            $table-> unsignedBigInteger('product');
            $table-> unsignedBigInteger('contact_info')->nullable();
            $table-> unsignedBigInteger('client');
            $table-> unsignedBigInteger('status')->default('1');

            $table -> foreign('product')-> references ('id')->on('products')->onDelete('cascade');
            $table -> foreign('contact_info')-> references ('id')->on('contacts')->onDelete('cascade');
            $table -> foreign('client')-> references ('id')->on('users')->onDelete('cascade');
            $table -> foreign('status')-> references ('id')->on('order_statuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
