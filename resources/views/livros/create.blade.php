@extends('main')
@section('title', 'Adicionar livro')
@section('content')
    <form action="{{ route('livros.store') }}" method="POST">
        @csrf
        @include('livros.partials.form')
    </form>
@endsection
