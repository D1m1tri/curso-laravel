@extends('main')
@section('title', 'Editar livro')
@section('content')
    <form action="{{ route('livros.update', $livro->id) }}" method="POST">
        @csrf
        @method('patch')
        @include('livros.partials.form')
    </form>
@endsection
