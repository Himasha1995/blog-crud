@extends('layouts.app')
@section('content')


<table class="table table-bordered">
        <tr>
            <th>No</th>            
            <th>title</th>
            <th>Images</th>
            <th>Summery</th>
            <th>Content</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($posts as $posts)
	    <tr>
	        <td>{{ ++$i }}</td>
	        <td>{{ $posts->title }}</td>
            <td><img src="/image/{{ $posts->image }}" width="100px"></td>
            <td>{{ $posts->summery }}</td>
            <td>{{ !! html_entity_decode($posts->content) }}</td>
            
	        <td>            
                <a class="btn btn-info" href="{{ route('posts.show',$posts->id) }}">Show</a>
                @can('posts-edit')
                <a class="btn btn-primary" href="{{ route('posts.edit',$posts->id) }}">Edit</a>
                @endcan                
                
                @can('posts-delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['posts.destroy', $posts->id],'style'=>'display:inline']) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                @endcan            
	        </td>
	    </tr>
	    @endforeach
