<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorieSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            CategorieSeeder::class,
        ]);

        User::factory()
        ->count(60)
        ->create();

        Article::factory()
        ->count(500)
        ->create();

    }
}
