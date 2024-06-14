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
        Schema::create('orderline', function (Blueprint $table) {
            $table->bigIncrements('orderline_id');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('orderinfo_id');
            $table->integer('quantity');

            $table->foreign('item_id')->references('item_id')->on('item');
            $table->foreign('orderinfo_id')->references('orderinfo_id')->on('orderinfo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orderline');
    }
};
