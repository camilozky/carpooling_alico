@extends('layout')

@section('title', 'List of Trips')

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
			<li><a href="{{ route ('trips.show', $tripsItem) }}">{{ $tripsItem->name }} <br> <small> {{ $tripsItem->placePickup }} => {{ $tripsItem->placeDropoff }}</small>  <br><small>{{ $tripsItem->timePickup }} </small> <br> <small> Cupos {{ $tripsItem->seats }}<br> {{ $tripsItem->updated_at->diffForHumans() }}  </small> </a></li>
		@empty
			<li>"{{ __('There are no trips') }}"</li>
		@endforelse
		{{$trips->links()}}
	</ul>

@endsection