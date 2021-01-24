@extends('layouts.master')

@section('header')
Cars
@endsection

@section('content')
<div class="button">
	<a href="{{ route('addCars') }}"><button>Add Car</button></a>
</div>

<div class="container-fluid">
	<div class="row">
		@foreach($cars as $car)
		<div class="col-l-3 col-md-4 col-sm-12 mb-3">
			<h4>Brand: <i>{{ $car->brand }}</i></h4>
			<h5>Type: <i>{{ $car->type }}</i></h5>
			<p>Buildyear: <i>{{ $car->buildyear }}</i></p>
			<a href="{{ route('viewcar', ['carid' => $car->id]) }}"><button class="btn btn-info">Informatie bekijken</button></a>
		</div>
		@endforeach
	</div>
</div>
@endsection