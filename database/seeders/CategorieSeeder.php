<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Faits divers',
            'A ne pas manquer',
            'Sports',
            'Sortie',
            'Politique',
            'Économie',
            'Culture',
            'Sciences',
            'Éducation',
        ];

        foreach ($categories as $categorie) {
            Categorie::create([
                'name' => $categorie,
                'slug' => Str::slug($categorie)
            ]);
        }
    }
}
