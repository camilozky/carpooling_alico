@auth
<nav class="navbar navbar-expand-lg navbar-light bg-light">

	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('trips.create') }}">{{ __('Make a trip') }}</a>
			</li>
			<li class="nav-item">
				<a class="nav-link disabled" href="#">Disabled</a>
			</li>
			<div id="accordion">
				<div class="card">
					<div class="card-header" id="headingOne">
						<h5 class="mb-0">
							<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								{{ __('Search') }}
							</button>
						</h5>
					</div>

					<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
						<div class="card-body">
							<form class="form-inline my-2 my-lg-0">
								<div class="card-body">
									<div class="form-group">
										{{ Form::open(['route' => 'trips.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
									</div>

									<div class="form-group">
										{{ Form::date('datePickup', null, ['class' => 'form-control',  'placeholder' => __('datePickup')]) }}
									</div>

									<div class="form-group">
										{{ Form::open(['route' => 'trips.index', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
									</div><br>

									<div class="form-group">
										{{ Form::time('timePickup', null, ['class' => 'form-control', 'placeholder' =>  __('timePickup')]) }}
									</div><br>

									<div class="form-group">
										{{ Form::text('placeDropoff', null, ['class' => 'form-control', 'placeholder' =>  __('placeDropoff')]) }}
									</div><br>

									<div class="form-group">
										{{ Form::text('places', null, ['class' => 'form-control', 'placeholder' =>  __('places')]) }}
									</div><br>

									<div class="form-group">
										{{ Form::text('placePickup', null, ['class' => 'form-control', 'placeholder' =>  __('placePickup')]) }}
									</div><br>

									<div class="form-group">
										{{ Form::text('name', null, ['class' => 'form-control', 'placeholder' =>  __('Name')]) }}
									</div><br>

									<div class="form-group">
										<button type="submit" class="btn btn-outline-primary"><span></span>{{ __('Search') }} </button>
									</div>										{{ Form::close() }}
								</form>
							</div>
						</div>
					</div>
				</div>
			</ul>
		</div>
	</nav>
	@endauth
	{{-- firebase --}}
	{{-- <li class="{{setActive('maketrip')}}"><a href="{{ route('maketrip') }}">{{ __('Make a trip') }}</a></li> --}}
