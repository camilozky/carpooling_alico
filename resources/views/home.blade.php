	{{-- Welcome <?php echo $name ?> --}}
	{{-- Welcome <?php echo $name ?? "Guest" ?> --}}
	{{-- Welcome <?php echo "<script>alert('Hi there!')</script>" ?> --}}
	{{-- Welcome {{ $name ?? "Guest"}} --}}
@extends('layout')

{{-- @section('title')
	Home
@endsection
 --}}

@section('title', 'Inicio')

@section('content')
	<h1>{{ __('Home') }}</h1>
@endsection
