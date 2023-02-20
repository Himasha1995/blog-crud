@extends('layouts.app')
@section('content')


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


<from>    
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Author Id:</strong>
                    <input type="text"class="form-control form-control-sm form-control-border border-width-2"name="slug">
		        </div>
		    </div>

    
            <div class="col-xs-12 col-sm-12 col-md-12">
		        <div class="form-group">
		            <strong>Parent Id:</strong>
		        </div>
		    </div>

            <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="mb-sm-0">Title<code> *</code></label>
                            <input type="text"class="form-control form-control-sm form-control-border border-width-2"name="title">
                        </div>
                    </div>


            <div class="col-sm-4">
                        <div class="form-group">
                            <label class="mb-sm-0">Meta Title<code> *</code></label>
                            <input type="text" class="form-control form-control-sm form-control-border border-width-2"name="meta_title">
                        </div>
                    </div>
                </div>

                <div class="col-sm-4">
                        <div class="form-group">
                            <label class="mb-sm-0">Slug</label>
                            <input type="text"class="form-control form-control-sm form-control-border border-width-2"name="slug">
                        </div>
                    </div>
                </div>
     

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label class="mb-sm-0">Post Image<code> *</code></label>
                            <input type="file" class="form-control form-control-sm form-control-file"
                                   name="post_image">
                        </div>
                    </div>
            

		    <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="mb-sm-0">Summary</label>
                            <textarea rows="3" class="form-control form-control-sm form-control-border border-width-2" name="summary"></textarea>
                        </div>
                    </div>
                </div> 
            

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label class="mb-sm-0">Content</label>
                            <textarea rows="3" id="post_content_editor"class="form-control form-control-sm form-control-border border-width-2" name="post_content"></textarea>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		            <button type="submit" class="btn btn-primary">Submit</button>
		        </div>

		</div>
    </form>
    <script src="//cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ) )
            .catch( error => {
                console.error( error );
            } );
    </script>

@endsection
