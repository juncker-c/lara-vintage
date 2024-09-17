<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'menu' => 'Home modif',
                'title' => 'Bienvenue sur notre site',
                'description' => 'Aliquam eget felis arcu. Vestibulum fermentum felis massa, sit amet finibus velit fermentum nec. Aliquam ante diam, consequat at suscipit non, ornare quis nibh. Sed eu sodales tortor. Integer vel elementum libero. Pellentesque nec sagittis lectus, aliquam dictum dui. In placerat elit nisl, id cursus ipsum scelerisque quis. Mauris rhoncus dui mi, vitae consectetur orci mollis sit amet. Nullam ornare risus mattis sagittis vulputate. Quisque porta dolor non odio condimentum placerat. Donec tempus tortor id accumsan interdum. Etiam ante ligula, tempor quis volutpat vel, gravida a ex. Vestibulum ipsum dui, auctor vitae lectus pulvinar, placerat auctor ex. Mauris et pharetra sem. ',
                'sort_key' => '0',
                'is_visible' => '1'
            ],
            [
                'menu' => 'Qui sommes-nous ?',
                'title' => 'Tout sur notre activité',
                'description' => 'Aliquam eget felis arcu. Vestibulum fermentum felis massa, sit amet finibus velit fermentum nec. Aliquam ante diam, consequat at suscipit non, ornare quis nibh. Sed eu sodales tortor. Integer vel elementum libero. Pellentesque nec sagittis lectus, aliquam dictum dui. In placerat elit nisl, id cursus ipsum scelerisque quis. Mauris rhoncus dui mi, vitae consectetur orci mollis sit amet. Nullam ornare risus mattis sagittis vulputate. Quisque porta dolor non odio condimentum placerat. Donec tempus tortor id accumsan interdum. Etiam ante ligula, tempor quis volutpat vel, gravida a ex. Vestibulum ipsum dui, auctor vitae lectus pulvinar, placerat auctor ex. Mauris et pharetra sem. ',
                'sort_key' => '0',
                'is_visible' => '1'
            ],
            [
                'menu' => 'Contact',
                'title' => 'Une question ? Contactez-nous !',
                'description' => 'Aliquam eget felis arcu. Vestibulum fermentum felis massa, sit amet finibus velit fermentum nec. Aliquam ante diam, consequat at suscipit non, ornare quis nibh. Sed eu sodales tortor. Integer vel elementum libero. Pellentesque nec sagittis lectus, aliquam dictum dui. In placerat elit nisl, id cursus ipsum scelerisque quis. Mauris rhoncus dui mi, vitae consectetur orci mollis sit amet. Nullam ornare risus mattis sagittis vulputate. Quisque porta dolor non odio condimentum placerat. Donec tempus tortor id accumsan interdum. Etiam ante ligula, tempor quis volutpat vel, gravida a ex. Vestibulum ipsum dui, auctor vitae lectus pulvinar, placerat auctor ex. Mauris et pharetra sem. ',
                'sort_key' => '0',
                'is_visible' => '1'
            ]
        ];

        foreach ($data as $items) {
            Item::factory()->create(
                array_merge($items, ['slug' => Str::slug($items['menu'])])
            );
        }
    }
}
