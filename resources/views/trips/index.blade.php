@extends('layout')

@section('title', 'Lista de Viajes')

@section('content')
	<h1>{{ __('List of trips') }}</h1>

{{-- 	<ul>
		<?php foreach ($trips as $tripsItem) {
			echo "<li>" . $tripsItem['title'] . "</li>";
		} ?>
	</ul> --}}

{{-- 	<ul>
		<?php foreach ($trips as $tripsItem): ?>
			<li>{{ $tripsItem['title'] }}</li>
		<?php endforeach ?>
	</ul>
 --}}

{{-- 	<ul>
		@if($trips)
			@foreach ($trips as $tripsItem)
				<li>{{ $tripsItem['title'] }}</li>
			@endforeach
		@else
			<li>There are no trips</li>
		@endif
	</ul> --}}

{{-- 	<ul>
		@isset($trips)
			@foreach ($trips as $tripsItem)
				<li>{{ $tripsItem['title'] }}</li>
			@endforeach
		@else
			<li>There are no trips</li>
		@endisset
	</ul>
 --}}
	<ul>
		@forelse ($trips as $tripsItem)
			<li>
				<a href="{{ route ('trips.show', $tripsItem) }}">
					{{ __('placeDropoff') }}: {{ $tripsItem->placeDropoff }}<br>
					<small>
						{{ __('nameDriver') }}: {{ $tripsItem->nameDriver }}<br>
						{{ __('timePickup') }}: {{ $tripsItem->timePickup }}<br>
						{{ __('seats') }}: {{ $tripsItem->seats }}<br>
					</a>{{ $tripsItem->created_at->diffForHumans() }}
				</small>
			</li>
		@empty
			<li>"{{ __('There are no trips') }}"</li>
		@endforelse
		{{$trips->links()}}
	</ul>
@endsection
