@extends('template')

@section('title', $actor->getFullName())

@section('content')
	<h2>Actor: {{ $actor->getFullName() }}</h2>

	<p>Rating: {{ $actor->rating }}</p>
	<p>Favorite movie: {{ $favoriteMovie ? $favoriteMovie->title : 'No tiene peli favorita' }}</p>
	<a href="/actors">volver</a>

	<script src="/js/scripts.js"></script>
@endsection
