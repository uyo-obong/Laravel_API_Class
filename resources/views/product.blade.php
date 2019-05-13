@extends('layouts.app')

@section('content')

<br/>
<div class="row">
	<div class="col-md-6">
		<form method="POST" action="{{ url('product') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<input class="form-control" type="text" name="name" placeholder="Enter Name">
			</div>

			<div class="form-group">
				<input class="form-control" type="text" name="description" placeholder="Enter description">
			</div>

			<div class="form-group">
				<input class="form-control" type="number" name="price" placeholder="Enter price">
			</div>

			<div class="form-group float-right">
				<button class="btn btn-primary">Submit</button>
			</div>
		</form>
	</div>

	<div class="col-md-6">
		<table class="table">
			
				<td>Name</td>
				<td>Description</td>
				<td>Price</td>
			
			<th>
				@foreach($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->description }}</td>
					<td>{{ $product->price }}</td>
				</tr>
				@endforeach
			</th>
		</table>
	</div>
</div>


@stop