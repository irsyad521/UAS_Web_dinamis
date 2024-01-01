<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nama_kategori' => 'Low-level',
                'keterangan' => 'Bahasa Low-level'
            ],
            [
                'nama_kategori' => 'Middle-level',
                'keterangan' => 'Bahasa Middle-level'
            ],
            [
                'nama_kategori' => 'High-level',
                'keterangan' => 'Bahasa High-level'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
