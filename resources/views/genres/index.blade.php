@extends('template.base')

@section('title', 'Listado de géneros')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h2>Todos los géneros</h2>
			@forelse ($genres as $oneGenre)
				<h3> {{ $oneGenre->name }} </h3>
				<ul>
					@forelse ($oneGenre->movies as $oneMovie)
						<li> {{ $oneMovie->title }} </li>
					@empty
						<li> No tiene películas </li>
					@endforelse
				</ul>
			@empty
				<li class="alert alert-danger">No hay generos</li>
			@endforelse
		</div>
	</div>
	<ul>

	</ul>
@endsection
