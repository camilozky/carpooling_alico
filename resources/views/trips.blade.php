@extends('layout')

@section('title', 'List of Trips')

@section('content')
	<h1>List of trips</h1>

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
			<li>{{ $tripsItem['title'] }}</li>
		@empty
			<li>There are no trips</li>
		@endforelse
	</ul>

@endsection