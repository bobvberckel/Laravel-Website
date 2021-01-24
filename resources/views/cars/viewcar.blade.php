@extends('layouts.master')

@section('header')
Car | {{ $cars->brand }}, {{ $cars->type }}
@endsection

@section('content')

<div class="container-fluid">
	<div class="row pt-5 pb-5">
		<div class="col-md-6 col-sm-12">

		</div>
		<div class="col-md-6 col-sm-12 text-center ">
			<img src="{{ asset('images/' . $cars->image) }}" height="500px" width="auto" alt="Foto van de {{ $cars->brand }} {{ $cars->type }}">
		</div>
	</div>
</div>
@endsection