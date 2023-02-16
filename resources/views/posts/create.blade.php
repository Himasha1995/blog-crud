@extends('layouts.app')
@section('content')

<!--Boostrap Css link-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!--front link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Post</h2>
            </div>
        <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>


    @if ($errors->any())

        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

    @endif


    {!! Form::open(array('route' => 'posts.store','method'=>'POST', 'enctype'=>'multipart/form-data')) !!}
    
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Author Id:</strong>
                    {!! Form::textarea('author_id', null, array('placeholder' => 'Author_Id','class' => 'form-control')) !!}		            
		        </div>
		    </div>

    
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Parent Id:</strong>
                    {!! Form::textarea('parent_id', null, array('placeholder' => 'Parent_Id','class' => 'form-control')) !!}		            
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Title:</strong>
                    {!! Form::textarea('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}		            
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Meta Title:</strong>
                    {!! Form::textarea('meta_title', null, array('placeholder' => 'Meta_Title','class' => 'form-control')) !!}		            
		        </div>
		    </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Slug:</strong>
                    {!! Form::textarea('slug', null, array('placeholder' => 'slug','class' => 'form-control')) !!}		            
		        </div>
		    </div>
     

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Post Image:</strong>
                    {!! Form::file('image', null) !!}                    
                </div>
            </div>    
            
            

		    <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Summery:</strong>
                    {!! Form::textarea('summery', null, array('placeholder' => 'Summery','class' => 'form-control')) !!}		            
		        </div>
		    </div>  
            

            <div class="mb-6">
                <label class="block">
                <span class="text-gray-700">Content</span>
                <textarea id="editor" style="height:150px" class="block w-full mt-1 rounded-md" name="content" rows="3"></textarea>
                </label>
            </div>  

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		        </div>

		</div>
    </form>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
