@extends('layouts.master')

@section('header')
Auto toevoegen aan de Database.
@endsection

@section('content')
<h2>Voeg een auto toe aan de database.</h2>

@if($errors->any())
<div class="alert alert-danger m-5">
	<ul class="p-3">
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif

<form action="{{ route('saveCars') }}" class="m-3" method="POST" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
		<label>Brand</label>
		<input type="text" class="form-control" name="brand" placeholder="Nissan" value="{{ old('brand') }}">
	</div>
	<div class="form-group">
		<label>Type</label>
		<input type="text" class="form-control" name="type" placeholder="Silvia S14" value="{{ old('type') }}">
	</div>
	<div class="form-group">
		<label>Buildyear</label>
		<input type="text" class="form-control" name="buildyear" placeholder="1988" value="{{ old('buildyear') }}">
	</div>
	<div class="form-group">
		<label>Extra's</label>
		<input type="text" class="form-control" name="extras" placeholder="Twin turbo" value="{{ old('extra') }}">
	</div>
	<div class="form-group">
		<label>Picture</label><br />
		<input type="file" name="image" accept="image/*" placeholder="Twin turbo" value="{{ old('image') }}">
	</div>
	<button type="submit" class="btn btn-success mb-5">Add Car to Database</button>
</form>
@endsection