<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // Generate 20 sample books
        for ($i = 0; $i < 20; $i++) {
            Book::create([
                'isbn' => $faker->isbn13,
                'title' => $faker->sentence(4),
                'author' => $faker->name,
                'description' => $faker->paragraph,
                'date_published' => $faker->date,
            ]);
        }
    }
}

