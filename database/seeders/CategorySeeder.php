<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Array di categorie di esempio
        $categories = [
            [
                'nome' => 'Proteine',
            ],
            [
                'nome' => 'Aminoacidi',
            ],
            [
                'nome' => 'Pre-Workout',
            ],
        ];

        // Popolare la tabella delle categorie con i dati
        foreach ($categories as $categoryData) {
            Category::create($categoryData);
        }
    }
}
