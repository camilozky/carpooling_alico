	{{-- Welcome <?php echo $name ?> --}}
	{{-- Welcome <?php echo $name ?? "Guest" ?> --}}
	{{-- Welcome <?php echo "<script>alert('Hi there!')</script>" ?> --}}
	{{-- Welcome {{ $name ?? "Guest"}} --}}
@extends('layout')

{{-- @section('title')
	Home
@endsection
 --}}

@section('title', 'Home')

@section('content')
	<h1>Home</h1>
@endsection
