<?php

declare(strict_types=1);

use App\Models\Category;
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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->boolean('is_visible')->default(false);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });
        Schema::table('sub_categories', function (Blueprint $table) {
            $table->foreignIdFor(Category::class)->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
        Schema::table('sub_categories', function (Blueprint $table) {
            $table->dropForeignIdFor(Category::class);
        });
    }
};
