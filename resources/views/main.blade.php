@extends('laravel-usp-theme::master')

@section('javascripts_bottom')
    @parent
    <script  src="{{asset('/js/livro.js')}}"></script>
@endsection
