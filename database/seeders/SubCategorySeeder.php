<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\SubCategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubCategorySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['category_id' => '1', 'name' => 'Assises','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Chaises Longues et Fauteuils','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Chaises d\'Appoint et Chaises de Salon','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Chaises d\'Appoint','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Chaises de Salon','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Chaises Pliantes','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Chaises de Bureau','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Sièges de Bureau','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Sièges Pivotants','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Rocking Chairs','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Bancs','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Canapés','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Divans et Chaises longues','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Divans','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Chaises Longues et Banquettes','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tabourets','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Poufs & Ottomanes','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Sets de Salon','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Chaises d\'Enfant','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Chaises de Jardin','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables Basses & Tables d\'Appoint','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables basses','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables d\'Appoint','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables Gigognes & Tables Empilables','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables de Salle à Manger','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Bureaux','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables de Travail & Plans de Travail','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Dessertes et Chariots','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables de Chevet','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables de Jardin','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Tables Console','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Meubles de rangement','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Meubles de Rangement & Armoires','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Meubles de Rangement','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Armoires & Penderies','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Commodes & Placards','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Coiffeuses','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Étagères & Consoles Murales','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Étagères','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Bibliothèques','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Enfilades & Buffets','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Enfilades','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Crédences','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Buffets','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Placards','is_visible' => '1'],
            ['category_id' => '1', 'name' => 'Secrétaires','is_visible' => '1'],
            ['category_id' => '2', 'name' => 'Lampes de Bureau & Lampes de Table','is_visible' => '1'],
            ['category_id' => '2', 'name' => 'Luminaires de Plafond','is_visible' => '1'],
            ['category_id' => '2', 'name' => 'Lustres','is_visible' => '1'],
            ['category_id' => '2', 'name' => 'Suspensions','is_visible' => '1'],
            ['category_id' => '2', 'name' => 'Appliques Murales','is_visible' => '1'],
            ['category_id' => '2', 'name' => 'Lampadaires','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Miroirs','is_visible' => '0'],
            ['category_id' => '3', 'name' => 'Tapis & Produits Textiles','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Tapis','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Produits Textiles','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Décoration murale','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Posters','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Cartes','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Panneaux','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Objets de Décoration & Sculptures','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Sculptures','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Objets de Décoration','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Articles de table','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Vaisselle','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Vases','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Bols et Coupes','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Céramiques','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Portemanteaux','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Porte-revues','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Caisses, Boîtes & Paniers','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Horloges','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Paravents','is_visible' => '1'],
            ['category_id' => '3', 'name' => 'Bijoux &#38; Sacs','is_visible' => '1'],
            ['category_id' => '4', 'name' => 'Les pièces d\'exception','is_visible' => '1'],
            ['category_id' => '2', 'name' => 'AJP','is_visible' => '0'],
            ['category_id' => '4', 'name' => 'BF','is_visible' => '0']
        ];

        foreach ($data as $subCategories) {
            SubCategory::factory()->create(array_merge($subCategories, ['slug' => Str::slug($subCategories['name'])]));
        }
    }
}
