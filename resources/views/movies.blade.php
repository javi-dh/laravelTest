{{-- 1. Heredo del archivo base template.blade.php --}}
@extends('template')

{{-- 2. Seteo el title del documento --}}
@section('title', 'Movies List')

{{-- 3. Inyecto la data deseada --}}
@section('content')
	<h2>Movies list</h2>
	<p>El usuario se llama: <b>{{ $username }}</b></p>
	<ul>
		@forelse ($results as $result)
			<li>{{ $result }}</li>
		@empty
			<li><b>No hay resultados</b></li>
		@endforelse
	</ul>

	<div class="row">
		@foreach ($moviesList as $movie)
			<div class="col-3" style="margin-bottom: 40px;">
				<h4>{{ $movie['title'] }}</h4>
				<i> Genre: {{ $movie['genre'] }}</i>
				@unless ($movie['title'] === 'Avatar')
					<span style="color: red;"> -Excelente</span>
				@endunless
				<br>
				<img src="{{$movie['poster']}}" width="100"> <br><br>
				<a class="btn btn-success" href="/movie-detail/{{$movie['title']}}">ver detalle</a>
			</div>
		@endforeach
	</div>
@endsection
