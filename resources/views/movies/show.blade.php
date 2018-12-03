@extends('template.base')

@section('title', $movie->title)

@section('content')
	<div class="row">
		<div class="col-md-12">
			<h2> {{ $movie->title}} </h2>
			@forelse ($movie->actors as $oneActor)
				<p>{{ $oneActor->getLink() }}</p>
			@empty

			@endforelse
		</div>
	</div>
	<ul>

	</ul>
@endsection
