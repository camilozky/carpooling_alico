<!DOCTYPE html>
<html>
<head>
	<title>@yield('title', 'CarPooling Alico')</title>
	<style >
		.active a {
			color: green;
			text-decoration: none;
		}
	</style>
</head>
<body>
	<nav>
		<ul>
			<li class="{{request()->routeIs('home') ? 'active' : ''}}"><a href="/">Home</a></li>
			<li class="{{request()->routeIs('trips') ? 'active' : ''}}"><a href="/trips">List of Trips</a></li>
			<li class="{{request()->routeIs('maketrip') ? 'active' : ''}}"><a href="/maketrip">Make a Trip</a></li>
			<li class="{{request()->routeIs('jointrip') ? 'active' : ''}}"><a href="/jointrip">Join a Trip</a></li>
		</ul>
	</nav>
	@yield('content')
</body>
</html>