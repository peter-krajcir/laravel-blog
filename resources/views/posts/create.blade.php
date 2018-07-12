@extends('layouts.master')

@section('content')

	<h3>Publish a post</h3>
<hr>
	<form method="POST" action="/posts">
		{{ csrf_field() }}

	  <div class="form-group">
	    <label for="title">Title</label>
	    <input type="text" class="form-control" id="title" name="title">
	  </div>
	  <div class="form-group">
	    <label for="body">Body</label>
	    <textarea name="body" id="body" cols="30" rows="10" class="form-control"></textarea>
	  </div>

	  <button type="submit" class="btn btn-primary">Publish</button>
	</form>

@endsection