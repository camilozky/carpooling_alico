@extends('layouts.app')
@auth
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					@include('partials.validation-errors')
					<form method="POST" action="{{ route('co2fingerprint.store') }}">
						@include('trips._form_co2_fingerprint', ['btnText' => 'Register Co2 footprint'])
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@endauth
