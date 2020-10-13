@extends('layouts.app')
@section('content')
    <h1>Create Posts</h1>
<form method="GET" action='PostsController@store' >
        <div class="form-group" >
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter POST title ">
          </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" id="body" rows="3"></textarea>
        </div>
        <div class="col-auto">
            <button type="submit" class="btn btn-primary mb-2">Submit</button>
        </div>
      </form>
      
@endsection