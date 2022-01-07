@extends('layout.template');

@section('content')
<a href="{{ route('article.create')}}" class="btn btn-primary">Create</a>
<table class="table table-dark table-striped mt-4">
<thead>
	<tr>
		<th scope="col">ID</th>
		<th scope="col">Code</th>
		<th scope="col">Description</th>
		<th scope="col">Amount</th>
		<th scope="col">Price</th>
		<th scope="col">Edit</th>
		<th scope="col">Delete</th>
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
		<td><a href="{{ route('article.edit', $article)}}" class="btn btn-info">Edit</a></td> 
			<form action="{{ route('article.destroy', $article) }}" method="post">
			 @csrf
			 @method('DELETE')
		   <td><button type="submit" class="btn btn-danger">Delete</button></td>
		   </form>
	</tr>
	@endforeach
</tbody>
</table>
@endsection