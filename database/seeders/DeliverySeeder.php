<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Delivery;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DeliverySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['name' => 'venir chercher l\'objet','is_visible' => true],
            ['name' => 'envoi postal','is_visible' => true],
            ['name' => 'autre','is_visible' => true],
            ['name' => 'Point relais','is_visible' => true]
        ];

        foreach ($data as $deliveries) {
            Delivery::factory()->create(
                array_merge($deliveries, ['slug' => Str::slug($deliveries['name'])])
            );
        }
    }
}
