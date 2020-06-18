@extends('layout')

@section('title', 'Php Firebase_sdk')

@section('content')
	<h1>{{ __('List of trips') }}</h1>
	<ul>
		@forelse ($trips as $tripsItem)
			<li>{{ $tripsItem['title'] }}</li>
		@empty
			<li>There are no trips</li>
		@endforelse
	</ul>
</html>
@endsection
