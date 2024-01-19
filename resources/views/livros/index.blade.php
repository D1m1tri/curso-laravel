@extends('main')

@section('title', 'Livros')

@section('content')
    @forelse ($livros as $livro)
        @include('livros.partials.fields')
        <hr>
    @empty
        <p>Não existem livros registados</p>
    @endforelse
@endsection
