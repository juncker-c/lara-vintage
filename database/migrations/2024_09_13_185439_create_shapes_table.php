<?php

use App\Models\Shape;
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
        Schema::create('shapes', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('title')->unique();
            $table->string('slug')->unique();
            $table->text('description');
            $table->boolean('is_visible')->default(false);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        Schema::table('ads', function (Blueprint $table) {
            $table->foreignIdFor(Shape::class)->references('id')->on('shapes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shapes');
        Schema::table('ads', function (Blueprint $table) {
            $table->dropForeignIdFor(Shape::class);
        });
    }
};
