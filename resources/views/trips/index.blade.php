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

					<table class="table table-hover table-striped">
						<tbody>
							<tr>
								<td><small>{{ __('datePickup') }}</small></td>
								<td><small>{{ __('timePickup') }}</small></td>
								<td><small>{{ __('placePickup') }}</small></td>
								<td><small>{{ __('placeDropoff') }}</small></td>
								<td><small>{{ __('seats') }}</small></td>
							</tr>
							@forelse ($trips as $trip)
							<tr>
								<td><a href="{{ route ('trips.show', $trip) }}"><small>{{ $trip->datePickup }}</a><br></small><small style="font-size:10px">{{ $trip->created_at->diffForHumans() }}</small></td>
								<td><a href="{{ route ('trips.show', $trip) }}"><small>{{ $trip->timePickup }}</small></a></td>
								<td><a href="{{ route ('trips.show', $trip) }}"><small>{{ $trip->placePickup }}</small></a></td>
								<td><a href="{{ route ('trips.show', $trip) }}"><small>{{ $trip->placeDropoff }}</small></a></td>
								<td><a href="{{ route ('trips.show', $trip) }}"><small>{{ $trip->seats }}</small></a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
					{{ $trips->render() }}
					@endsection
				</div>
			</div>
		</div>
	</div>
</div>
