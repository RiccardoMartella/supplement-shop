<?php

namespace Database\Seeders;

use App\Models\Admin\Supplement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
            SupplementSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
