<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', [
            'livros' => $livros
        ]);
    }

    public function show($isbn)
    {
        $livro = Livro::where('isbn', $isbn)->first();
        if (!$livro) {
            abort(404, 'Livro não encontrado');
        }
        else {
            return view('livros.show', [
                'livro' => $livro
            ]);
        }
    }
}
