<?php

namespace Database\Seeders;

use App\Models\Bahasa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BahasaSeeder extends Seeder
{
    public function run(): void
    {
        $bahasas =  [
            [
                'id' => 'tt1746090',
                'nama' => 'Python',
                'sinopsis' => 'Python diciptakan oleh Guido van Rossum pertama kali pada awal tahun 1990-an di Belanda. Bahasa Python terinspirasi dari bahasa pemrograman ABC. Hingga saat ini, Guido masih tetap menjadi penulis utama untuk Python.',
                'tahun' => 2023,
                'category_id' => 1,
                'penemu' => 'Guido van Rossum',
                'foto_sampul' => 'python.jpeg',
            ],
            [
                'id' => 'tt0944947',
                'nama' => 'JavaScript',
                'sinopsis' => 'JavaScript diciptakan oleh Brendan Eich di Netscape Communications pada tahun 1995. Awalnya, JavaScript dikembangkan untuk membuat halaman web interaktif.',
                'tahun' => 1995,
                'category_id' => 1,
                'penemu' => 'Brendan Eich',
                'foto_sampul' => 'javascript.png',
            ],
            [
                'id' => 'tt0111161',
                'nama' => 'Java',
                'sinopsis' => 'Java dikembangkan oleh James Gosling pada tahun 1991 di Sun Microsystems. Java sering digunakan untuk pengembangan perangkat lunak, aplikasi web, dan perangkat mobile.',
                'tahun' => 1991,
                'category_id' => 2,
                'penemu' => 'James Gosling',
                'foto_sampul' => 'java.png',
            ],
            [
                'id' => 'tt0109830',
                'nama' => 'C++',
                'sinopsis' => 'C++ adalah bahasa pemrograman yang diciptakan oleh Bjarne Stroustrup pada tahun 1983. C++ banyak digunakan dalam pengembangan perangkat lunak dan sistem operasi.',
                'tahun' => 1983,
                'category_id' => 2,
                'penemu' => 'Bjarne Stroustrup',
                'foto_sampul' => 'cpp.jpeg',
            ],
            [
                'id' => 'tt0108778',
                'nama' => 'Ruby',
                'sinopsis' => 'Ruby diciptakan oleh Yukihiro Matsumoto pada tahun 1995 di Jepang. Ruby terkenal karena fokus pada kesederhanaan dan produktivitas.',
                'tahun' => 1995,
                'category_id' => 1,
                'penemu' => 'Yukihiro Matsumoto',
                'foto_sampul' => 'ruby.png',
            ],
            [
                'id' => 'tt0109831',
                'nama' => 'Swift',
                'sinopsis' => 'Swift adalah bahasa pemrograman yang dikembangkan oleh Apple pada tahun 2014. Swift digunakan untuk pengembangan aplikasi iOS dan macOS.',
                'tahun' => 2014,
                'category_id' => 1,
                'penemu' => 'Apple Inc.',
                'foto_sampul' => 'swift..png',
            ],
            [
                'id' => 'tt1234567',
                'nama' => 'Kotlin',
                'sinopsis' => 'Kotlin adalah bahasa pemrograman modern yang dibuat oleh JetBrains pada tahun 2011. Kotlin berjalan di atas mesin virtual Java (JVM) dan terintegrasi dengan Java.',
                'tahun' => 2011,
                'category_id' => 1,
                'penemu' => 'JetBrains',
                'foto_sampul' => 'kotlin.jpeg',
            ]
        ];
        foreach ($bahasas as $bahasa) {
            Bahasa::create([
                'id' => $bahasa['id'],
                'nama' => $bahasa['nama'],
                'sinopsis' => $bahasa['sinopsis'],
                'tahun' => $bahasa['tahun'],
                'category_id' => $bahasa['category_id'],
                'penemu' => $bahasa['penemu'],
                'foto_sampul' => $bahasa['foto_sampul'],
            ]);
        }

    }
}
