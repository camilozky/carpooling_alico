@extends('layouts.app')

@section('title', 'Lista de Viajes')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List of trips') }}</div>
                <div class="card-body">
					<ul>
						@forelse ($trips as $tripsItem)
							<a href="{{ route ('trips.show', $tripsItem) }}">
            					<div class="card-header">
									{{ __('placeDropoff') }}: {{ $tripsItem->placeDropoff }}<br>
									{{ __('nameDriver') }}: {{ $tripsItem->nameDriver }}<br>
									{{ __('timePickup') }}: {{ $tripsItem->timePickup }}<br>
									{{ __('seats') }}: {{ $tripsItem->seats }}<br>
								</a>
								{{ $tripsItem->created_at->diffForHumans() }}<br>
							</div>
						@empty
							<li>"{{ __('There are no trips') }}"</li>
						@endforelse
						{{$trips->links()}}
					</ul>
					@endsection
				</div>
			</div>
		</div>
	</div>
</div>
