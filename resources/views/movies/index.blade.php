@extends('template.base')

@section('title', 'Listado de películas')

@section('content')

	<div class="row">
		<div class="col-md-6">
			<h2>To ten New</h2>
			@forelse ($topTenNew as $oneMovie)
				<li>
					<b>Title:</b> {{ $oneMovie->title }} |
					<b>Id:</b> {{ $oneMovie->id }} |
					<b>Genre:</b> {{ $oneMovie->genre_id ? $oneMovie->genre_id : 'Sin género' }} |
				</li>
			@empty
				<li class="alert alert-danger">No hay películas</li>
			@endforelse
		</div>

		<div class="col-md-6">
			<h2>To ten Average</h2>
			@forelse ($topTenAvg as $oneMovie)
				<li>
					<b>Title:</b> {{ $oneMovie->title }} |
					<b>Rating:</b> {{ $oneMovie->rating }} | 
					<b>Genre:</b> {{ $oneMovie->genre_id ? $oneMovie->genre_id : 'Sin género' }} |
				</li>
			@empty
				<li class="alert alert-danger">No hay películas</li>
			@endforelse
		</div>
	</div>
	<ul>

	</ul>
@endsection
