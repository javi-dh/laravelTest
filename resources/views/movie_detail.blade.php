{{-- 1. Heredo del archivo base template.blade.php --}}
@extends('template')

{{-- 2. Seteo el title del documento --}}
@section('title', $findIt['title'])

{{-- 3. Inyecto la data deseada --}}
@section('content')
	<h2>{{ $findIt['title'] }}</h2>
	<p>Genre: {{ $findIt['genre'] }}</p>
	<img src="/{{ $findIt['poster'] }}" width="100"> <br>
	<a href="/movies">volver</a>
@endsection
