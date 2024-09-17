<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['name' => 'Meubles', 'is_visible' => true],
            ['name' => 'Luminaires', 'is_visible' => true],
            ['name' => 'Accessoires', 'is_visible' => true],
            ['name' => 'Les exceptionnels', 'is_visible' => true]
        ];

        foreach ($data as $categories) {
            Category::factory()->create(
                array_merge($categories, ['slug' => Str::slug($categories['name'])])
            );
        }
    }
}
