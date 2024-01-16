<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Livro;

class LivroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $livro = [
            'titulo' => 'O Senhor dos Anéis: A Sociedade do Anel',
            'autor' => 'J. R. R. Tolkien',
            'isbn' => '9788533613379',
        ];
        Livro::create($livro);

        Livro::factory()->count(149)->create();
    }
}
