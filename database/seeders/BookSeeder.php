<?php


namespace Database\Seeders;

use App\Models\Book;

// use App\database\Factories\BookFactory;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::factory()->count(50)->create();
    }
}
