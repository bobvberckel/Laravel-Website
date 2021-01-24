<!DOCTYPE html>
<html lang="nl">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bob Hub</title>

	<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<header>
		<h2>
			@section('header')
			De Header
			@show
		</h2>
	</header>

	<nav>
		<ul>
			<a href="{{ route('homepage') }}">
				<li>Home</li>
			</a>
			<a href="{{ route('about') }}">
				<li>About</li>
			</a>
			<a href="{{ route('cars') }}">
				<li>Cars</li>
			</a>
			<a href="{{ route('profile') }}">
				<li>Profile</li>
			</a>
			<a href="{{ route('register') }}">
				<li>Register</li>
			</a>
			<a href="{{ route('login') }}">
				<li>Login</li>
			</a>
			<a href="{{ route('contact') }}">
				<li>Contact</li>
			</a>
		</ul>
	</nav>

	<main>
		@yield('content')
	</main>

	<footer>
		&copy; bobvanberckel.com
	</footer>
</body>

</html>