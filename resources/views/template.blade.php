<!DOCTYPE html>
<html lang="es" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body>
		{{-- Defino el espacio que tendrá la información inyectada --}}
		<div class="container">
			<div class="row">
				<div class="col-12">
					@yield('content')
				</div>
			</div>
		</div>
	</body>
</html>
