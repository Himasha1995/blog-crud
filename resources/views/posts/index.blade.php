@extends('layouts.app')
@section('content')

<!--Boostrap Css link-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--front link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
         <p>{{ $message }}</p>
        </div>
    @endif

<div class="mt-1 mb-4">
    <a class="px-2 py-2 text-sm text-white bg-blue-600 rounded"
     href="{{ route('posts.create') }}">{{ __('Add New Post') }}</a>
</div>



<table class="table table-bordered">
        <tr>
            <th>No</th>            
            <th>title</th>
            <th>Images</th>
            <th>Summery</th>
            <th>Content</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($posts as $post)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $post->title }}</td>
            <td><img src="/image/{{ $post->image }}" width="100px"></td>
            <td>{{ $post->summery }}</td>
            <td>{{ !! html_entity_decode($post->content) }}</td>
            
	        <td>            
                <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                @can('post-edit')
                <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                @endcan                
                
                @can('post-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $post->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan            
	        </td>
	    </tr>
	    @endforeach
