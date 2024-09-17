<?php

declare(strict_types=1);

use App\Models\SubCategory;
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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('name');
            $table->string('slug');
            $table->boolean('is_visible')->default(true);
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
        });

        Schema::table('ads', function (Blueprint $table) {
            $table->foreignIdFor(SubCategory::class)->references('id')->on('sub_categories');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
        Schema::table('ads', function (Blueprint $table) {
            $table->dropForeignIdFor(SubCategory::class);
        });
    }
};
