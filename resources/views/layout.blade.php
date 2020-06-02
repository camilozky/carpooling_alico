<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'CarPooling Alico')</title>
</head>
<body>
	<nav>
		<ul>
			<li><a href="/">Home</a></li>
			<li><a href="/trips">List of Trips</a></li>
			<li><a href="/maketrip">Make a Trip</a></li>
			<li><a href="/jointrip">Join a Trip</a></li>
		</ul>
	</nav>
	@yield('content')
</body>
</html>