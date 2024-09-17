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
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('title', 255);
            $table->string('slug', 255);
            $table->text('description');
            $table->text('detail')->nullable();
            $table->float('price');
            $table->float('price_htva');
            $table->float('amount_tva');
            $table->string('price_delivery', 255)->nullable();
            $table->boolean('is_visible')->default(true);
            $table->boolean('is_disponible')->default(true);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
