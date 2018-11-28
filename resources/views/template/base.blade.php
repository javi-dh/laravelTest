<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<title> @yield('title') </title>
		<link rel="stylesheet" href={{ asset('/css/bootstrap.min.css') }}>
	</head>
	<body>

		@include('partials.header')

		<div class="container">
			<div class="row">
				<div class="col-12">
					@yield('content')
				</div>
			</div>
		</div>

		<script src={{ asset('/js/jquery-3.3.1.min.js')}} ></script>
		<script src={{ asset('/js/bootstrap.min.js')}} ></script>

		@yield('custom-js')
	</body>
</html>
