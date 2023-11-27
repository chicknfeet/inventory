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
        Schema::create('orderdetail', function (Blueprint $table) {
            $table->integerIncrements('OrderDetailID');
            $table->unsignedInteger('OrderId');
            $table->foreign('OrderID')->references('OrderID')->on('order');
            $table->unsignedInteger('productid');
            $table->foreign('ProductID')->references('id')->on('products');
            $table->integer('Quantity');
            $table->integer('Subtotal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderderdetail');
    }
};
