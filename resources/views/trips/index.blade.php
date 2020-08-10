@extends('layouts.app')

@section('title', 'Lista de Viajes')

@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<div class="card">

				<div class="card-header">{{ __('List of trips') }}</div>
				<div class="card-body">
					<small>{{ $trips->count() }} {{ __('Trips') }}</small>
					@forelse ($trips as $trip)
					<div class="container">
						<div class="row justify-content-center wrap">
							<div class="col-md-8">
								<a href="{{ route ('trips.show', $trip) }}">
									<div class="card mb-3 shadow-sm rounded">

										<small><div class="card-header text-black-50 ">{{ date('l, d F',strtotime($trip->datePickup )) }} {{ date('h:i A',strtotime($trip->timePickup )) }}
										</div></small>

										<div class="card-body">
											<div class="form-group row">
												<span >
													<label style="color:red" class="container font-weight-bold">{{ $trip->placePickup }}</label>
												</span>
											</div>
											<div class="form-group row">
												<span >
													<label style="color:green" class="container font-weight-bold text-green">{{ $trip->placeDropoff }}</label>
												</span>
											</div>
											<div class="form-group row">
												<label class="col-md-4 col-form-label text-md-left text-black-50">{{ __('seats') }}: {{ $trip->seats }}</label>
											</div>
											<small style="font-size:10px">{{ $trip->created_at->diffForHumans() }}</small>
											<i class="fas fa-car"></i>



										</div>
									</div>
								</div>
							</div>
						</div>
							</a>
						@endforeach
						{{ $trips->render() }}
						@endsection
					</div>
				</div>
			</div>
		</div>
	</div>
