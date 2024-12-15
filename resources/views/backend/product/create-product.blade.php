@extends('backend.layout.master')
@section('content')

{!!BootForm::open([ 'method' => 'POST', ])->action(route('admin.postCreateProduct'))->enctype("multipart/form-data")!!}

<div class="container">
	<div class="col-sm-4">
		{!! BootForm::text('Product Name', 'product_name') !!}
	</div>	
	<div class="col-sm-4">
		<div class="form-group">
			<label>Category</label>
			<select class="form-control" name="category_id" data-trigger name="choices-single-default" id="choices-single-default" placeholder="Seçim yapınız">
				<option value="">Seçiniz</option>
				@foreach($category as $c)
				<option value="{{$c->id}}">{{$c->category_name}}</option>
				@endforeach

			</select>
		</div>

	</div>
	<div class="col-sm-4">
		<label for="horizontal-firstname-input" class="col-sm-4 col-form-label">Product Resmi</label>
		<div class="col-sm-8">
			{!! BootForm::file('image ', 'image') !!}
		</div>		</div>
		<div class="col-sm-4">
			{!! BootForm::textarea('Desctiption', 'description') !!}
		</div>
		<button type="submit" class="btn btn-success">Kaydet</button>
	</div>

	{!! BootForm::close() !!}

	@endsection