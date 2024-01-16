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

    // CREATE
    public function create()
    {
        return view('livros.create', [
            'livro' => new Livro
        ]);
    }
    public function store(Request $request)
    {
        $livro = new Livro;
        $livro->titulo = $request->titulo;
        $livro->autor = $request->autor;
        $livro->isbn = $request->isbn;
        $livro->save();
        return redirect()->route('livros.index');
    }

    // READ
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

    // UPDATE
    public function edit($isbn)
    {
        $livro = Livro::where('isbn', $isbn)->first();
        if (!$livro) {
            abort(404, 'Livro não encontrado');
        }
        else {
            return view('livros.edit', [
                'livro' => $livro
            ]);
        }
    }
    public function update(Request $request, $isbn)
    {
        $livro = Livro::where('isbn', $isbn)->first();
        if (!$livro) {
            abort(404, 'Livro não encontrado');
        }
        else {
            $livro->titulo = $request->titulo;
            $livro->autor = $request->autor;
            $livro->isbn = $request->isbn;
            $livro->save();
            return redirect()->route('livros.index');
        }
    }

    // DELETE
    public function destroy($isbn)
    {
        $livro = Livro::where('isbn', $isbn)->first();
        if (!$livro) {
            abort(404, 'Livro não encontrado');
        }
        else {
            $livro->delete();
            return redirect()->route('livros.index');
        }
    }
}
