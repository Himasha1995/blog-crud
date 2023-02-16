@extends('layouts.app')
@section('content')

<h1>Edit Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <h2>Problem with Edit<h2>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('posts.update',$post->id) }}" method="POST" enctype="multipart/form-data">

<div class="row">
    <div class="form-group mb-2">
        <strong>Title:</strong>
        <textarea class="form-control" style="height:150px" name="title" placeholder="Title">{{ $post->title }}</textarea>
    </div>
</div>


    <div class="form-group mb-2">
        <strong>Image:</strong>
        <input type="file" name="image" class="form-control" placeholder="image">
        <img src="/image/{{ $post->image }}" width="200px">
    </div>
</div>

    <div class="form-group mb-2">
        <strong>Summery:</strong>
        <textarea class="form-control" style="height:100px" name="summery" placeholder="Summery">{{ $post->summery }}</textarea>
    </div>
</div>

    <div class="form-group mb-2">
    <label class="block">
    <span class="text-gray-700">Content</span>
    <textarea id="editor" style="height:150px" class="block w-full mt-1 rounded-md" name="content" rows="3"></textarea>
    </label>
</div>

  <div class="d-grid mt-3">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>

</div>
</form>