<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'Sách 1',
                'author' => 'Tác giả 1',
                'published_year' => 2021,
            ],
            [
                'title' => 'Sách 2',
                'author' => 'Tác giả 2',
                'published_year' => 2022,
            ],
            // Thêm dữ liệu cho các sách khác...
        ]);
    }
}
