<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivroRequest;
use App\Models\Livro;

class LivroController extends Controller {
    public function index()
    {
        $livros = Livro::all();
        return view('livros.index', [
            'livros' => $livros
        ]);
    }

    // CREATE
    public function create() {
        return view('livros.create', [
            'livro' => new Livro
        ]);
    }
    public function store(LivroRequest $request) {
        $validated = $request->validated();
        $livro = Livro::create($validated);
        return redirect()->route('livros.show', [
            'isbn' => $livro->isbn
        ])->with('alert-success', 'Livro cadastrado com sucesso!');
    }

    // READ
    public function show($isbn) {
        $livro = Livro::where('isbn', $isbn)->first();
        return view('livros.show', [
            'livro' => $livro
        ]);
    }

    // UPDATE
    public function edit($isbn) {
        $livro = Livro::where('isbn', $isbn)->first();
        return view('livros.edit', [
            'livro' => $livro
        ]);
    }
    public function update(LivroRequest $request, $livro) {
        $validated = $request->validated();
        $livro->update($validated);
        return redirect()->route('livros.show', [
            'isbn' => $livro->isbn
        ])->with('alert-success', 'Livro atualizado com sucesso!');
    }

    // DELETE
    public function destroy($id) {
        $livro = Livro::where('id', $id)->first();
        $livro->delete();
        return redirect()->route('livros.index');
    }
}
