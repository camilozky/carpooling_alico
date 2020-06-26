<nav>
	<ul>
		<li class="{{setActive('home')}}"><a href="{{ route('home') }}">{{ __('Home') }}</a></li>
		<li class="{{setActive('trips.*')}}"><a href="{{ route('trips.index') }}">{{ __('List of trips') }}</a></li>
		<li class="{{setActive('maketrip')}}"><a href="{{ route('maketrip') }}">{{ __('Make a trip') }}</a></li>
	</ul>
</nav>