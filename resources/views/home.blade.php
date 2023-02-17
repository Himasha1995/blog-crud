@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}


                    <div>
                    <!-- <div id="editor">
    <p>This is the editor content.</p>
</div> -->

<!--header-->

    <textarea name="editor" cols="30" rows="10"></textarea>
    <h1>Medical Home</h1>

<p><a href="http://127.0.0.1:8000/home">Home&nbsp;</a> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="http://127.0.0.1:8000"> &nbsp; About&nbsp; </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<a href="http://127.0.0.1:8000/login">&nbsp;Login&nbsp; </a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
<a href="http://127.0.0.1:8000/register">Register</a></p>

<h1><a href="https://www.missouripartnership.com/wp-content/uploads/2018/01/iStock-695349930.jpg" target="_top"><img alt="" src="https://www.missouripartnership.com/wp-content/uploads/2018/01/iStock-695349930.jpg" style="float:left; height:143px; width:380px" /></a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
