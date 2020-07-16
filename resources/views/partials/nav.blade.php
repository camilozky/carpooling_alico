
@auth
<nav class="navbar navbar-expand-lg navbar-light bg-light">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('trips.create') }}">{{ __('Make a trip') }}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
			{{ Form::open(['route' => 'trips.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
			<form class="form-inline my-2 my-lg-0">
				{{ Form::date('datePickup', null, ['class' => 'form-control',  'placeholder' => __('datePickup')]) }}
				{{ Form::time('timePickup', null, ['class' => 'form-control', 'placeholder' =>  __('timePickup')]) }}
				{{ Form::text('placeDropoff', null, ['class' => 'form-control', 'placeholder' =>  __('placeDropoff')]) }}
				{{ Form::text('places', null, ['class' => 'form-control', 'placeholder' =>  __('places')]) }}
				{{ Form::text('placePickup', null, ['class' => 'form-control', 'placeholder' =>  __('placePickup')]) }}
				{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' =>  __('Name')]) }}
				<button type="submit" class="btn btn-info"><span></span>{{ __('Search') }} </button>
			</form>
			{{ Form::close() }}
		</ul>
	</div>
</nav>
@endauth
{{-- firebase --}}
{{-- <li class="{{setActive('maketrip')}}"><a href="{{ route('maketrip') }}">{{ __('Make a trip') }}</a></li> --}}
