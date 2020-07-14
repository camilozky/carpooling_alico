@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">
				<div class="card-body">
					@include('partials.validation-errors')
					<form method="POST" action="{{ route('co2_fingerprint.store') }}">
						@include('trips._form_co2_fingerprint', ['btnText' => 'Register Co2 footprint'])
						@if (session('status'))
						<div class="alert alert-success" role="alert">
							{{ session('status') }}
						</div>
						@endif
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
