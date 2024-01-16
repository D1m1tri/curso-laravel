@extends('main')

@section('title', 'Livros')

@section('content')
    <h1>Livros</h1>
    <ul>
        @forelse ($livros as $livro)
            <li>
                <a href="{{ route('livros.show', $livro->isbn) }}">
                    {{ $livro->titulo }}
                </a>
            </li>
        @empty
            <li>Nenhum livro cadastrado.</li>
        @endforelse
    </ul>
@endsection
