@extends('backend.layout.master')
@section('content')
<table class="table">
	<thead>
		<tr>
			<th scope="col">#</th>
			<th scope="col">name</th>
			<th scope="col">category</th>
			<th scope="col">image</th>
			<th scope="col">description</th>
			<th>Action</th>
		</tr>
	</thead>
	@foreach($p as $l)
	<tbody>
		<tr>
			<th scope="row">{{$l->id}}</th>
			<td>{{@$l->product_name}}</td>
			<td>{{@$l->kategori->category_name}}</td>
			<td><img src="{{url('storage/product-image/'.@$l->p_image)}}" style="width: 30px; height: 30px;"></td>
			<td><img src="/product-image/{{ $l->p_image }}" width="100px"></td>

		</td>
		<td>{{@$l->description}}</td>
		<td>
			<a href="{{route('admin.getUpdateProduct',array('id'=>$l->id))}}" class="btn btn-warning">Edit Product</a>
			<a href="{{route('admin.getDeleteProduct',array('id'=>$l->id))}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</a>

		</td>
	</tr>

</tbody>
@endforeach
</table>

@endsection