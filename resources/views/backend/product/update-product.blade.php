@extends('backend.layout.master')
@section('content')

<h3>Product Update Page</h3>
<form action="{{route('admin.postUpdateProduct')}}" method="POST" enctype='multipart/form-data'>
	@csrf
	<div class="container">
		<div class="form-group">
			<label>Ürün Adı</label>
			<input type="text" name="product_name" class="form-control" value="{{@$p->product_name}}">
		</div>
		<div class="form-group">
			<label>Product Category</label>
			<select name="category_id" class="form-control">
				@foreach($c as $k)
				<option value="{{$k->id}}">{{$k->category_name}}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<label>Product İmage</label>
			<input type="file" name="image" class="form-control" >
		</div>
		<button class="btn btn-sm btn-success" type="submit">Ekleme</button>
		<input type="hidden" name="id" value="{{$p->id}}">
	</div>
</form>
@endsection	

