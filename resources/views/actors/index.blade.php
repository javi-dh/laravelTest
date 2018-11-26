@extends('template')

@section('title', 'Listado de Actores')

@section('content')
	<h2>Listado de Actores</h2>

	<ul>
		@forelse ($actors as $actor)
			<li>
				{{ $actor->getFullName() }}
				<a href="/actors/{{ $actor->id }}">[ver detalle]</a>
			</li>
		@empty
			<li><span style="color: red;">No hay actores</span></li>
		@endforelse
	</ul>
@endsection
