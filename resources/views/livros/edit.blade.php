@extends('main')
@section('title', 'Editar livro')
@section('content')
    <form action="{{ route('livros.update', $livro) }}" method="POST">
        @csrf
        @method('patch')
        @include('livros.partials.form')
    </form>
@endsection
