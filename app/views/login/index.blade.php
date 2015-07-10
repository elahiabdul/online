@extends('layouts.header')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In Light House</h3>
                    </div>


<div class="panel-body">
{{ Form::open(array('url' => 'login')) }}



<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

 <fieldset>
 <div class="form-group">
    
	
    {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com','class' =>'form-control')) }}
	 </div>
	
 </fieldset>

 <fieldset>
    <div class="form-group">
   
    {{ Form::password('password',array('class' =>'form-control')) }}
	 </div>
 </fieldset>

<p>{{ Form::submit('Login') }}</p>
{{ Form::close() }}



 </div>
                </div>
            </div>
        </div>
    </div>

@stop
