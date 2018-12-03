@extends('template.base')

@section('title', 'Listado de películas')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<h2>Todas las películas</h2>
			<table class="table table-light">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Title</th>
						<th scope="col">Genre</th>
						<th scope="col">Length</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					@forelse ($movies as $oneMovie)
						<tr>
							<td scope="row"> {{ $oneMovie->id }} </td>
							<td> {{ $oneMovie->title }} </td>
							<td>
								@if ($oneMovie->genre)
									<a href="genres/{{$oneMovie->genre_id}}">{{ $oneMovie->genre->name }}</a>
								@else
									<i>Sin género</i>
								@endif
							</td>
							<td> {{ $oneMovie->length }} </td>
							<td colspan="2">
								<a href="/movies/{{ $oneMovie->id }}" class="btn btn-success">ver detalle</a>
							</td>
						</tr>
					@empty
						<td colspan="5" class="alert alert-danger">No hay películas</td>
					@endforelse
				</tbody>
			</table>
		</div>
	</div>
	<ul>

	</ul>
@endsection
