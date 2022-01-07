@extends('layout.template');
@section('content')
<h2>Edit</h2>
<form action="{{ route('article.update', $article)}}" method="post">
	@csrf
	@method('PUT')
	<div class="mb-3">
		<label for="" class="form-label">Code</label>
	<input id="code" name="code" type="text" class="form-control" value="{{ $article->code }}">  
	</div>
	<div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input id="description" name="description" type="text" class="form-control" value="{{ $article->description }}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Amount</label>
    <input id="amount" name="amount" type="number" class="form-control" value="{{ $article->amount }}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input id="price" name="price" type="number" step="any" class="form-control" value="{{ $article->price }}">
  </div>
  <a href="/" class="btn btn-secondary" tabindex="5">Cancel</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
</form>
@endsection