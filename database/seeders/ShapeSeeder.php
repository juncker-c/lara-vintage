<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Shape;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ShapeSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['title' => 'Bon','description' => 'texte en cours de rédaction','is_visible' => '1'],
            ['title' => 'Moyen','description' => 'texte en cours de rédaction','is_visible' => '1'],
            ['title' => 'Mauvais','description' => 'texte en cours de rédaction','is_visible' => '1'],
            ['title' => 'Excellent','description' => 'texte en cours de rédaction','is_visible' => '1'],
            ['title' => 'd\'Amérique','description' => 'Luna Parker','is_visible' => '1']
        ];

        foreach ($data as $shapes) {
            Shape::factory()->create(
                array_merge($shapes, ['slug' => Str::slug($shapes['title'])])
            );
        }
    }
}
