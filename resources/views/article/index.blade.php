@extends('layout.template');

@section('content')
<a href="/create" class="btn btn-primary">Create</a>
<table class="table table-dark table-striped mt-4">
<thead>
	<tr>
		<th scope="col">ID</th>
		<th scope="col">Code</th>
		<th scope="col">Description</th>
		<th scope="col">Amount</th>
		<th scope="col">Price</th>
		<th scope="col">Action</th>
	</tr>
</thead>
<tbody>
	@foreach ($articles as $article)
	<tr>
		<td>{{ $article->id }}</td>
		<td>{{ $article->code }}</td>
		<td>{{ $article->description }}</td>
		<td>{{ $article->amount }}</td>
		<td>{{ $article->price }}</td>
		<td>
			<form action="" method="post">
				<a href="/{{ $article->id }}/edit" class="btn btn-info">Edit</a>
				@csrf
				@method('DELETE')
			    <button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</td>
	</tr>
	@endforeach
</tbody>
</table>
@endsection