@extends('layout.template');
@section('content')
<h2>Create</h2>
<form action="{{ route('article.store')}}" method="post">
	@csrf
	<div class="mb-3">
		<label for="" class="form-label">Code</label>
		<input id="code" name="code" type="text" class="form-control" tabindex="1">  
	</div>
	<div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input id="descripcion" name="description" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Amount</label>
    <input id="amount" name="amount" type="number" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input id="price" name="price" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <a href="/" class="btn btn-secondary" tabindex="5">Cancel</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Save</button>
</form>
@endsection