<nav>
		@auth
			<a href="{{ route('trips.create') }}" class="nav-link {{setActive('trips.create')}}">{{ __('Make a trip') }}</a>
		@endauth
		{{-- firebase --}}
		{{-- <li class="{{setActive('maketrip')}}"><a href="{{ route('maketrip') }}">{{ __('Make a trip') }}</a></li> --}}
</nav>
