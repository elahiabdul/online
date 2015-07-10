

@extends('layouts.inner')

@section('content')


 <div id="page-wrapper">
           
           


<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                    
                    
                    
                        <div class="panel-heading">
                            Add Contacts
                        </div>
                        <div class="panel-body">
                            <div class="row">
                            
                            
                                <div class="col-lg-6">
                                
                                 
                    @if(Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                    
                    @endif
                                
                                  @if($errors->has())
                                   									
									<p class="alert alert-success">
                                        {{ $errors->first('name','<li>:message</li>') }}
                                        {{ $errors->first('email','<li>:message</li>') }}
                                    	{{ $errors->first('phone','<li>:message</li>') }}
                                       
                                    </p>
                                    @endif
    
                                
                                    
                                    {{ Form::open(array('url' => 'contacts/add')) }}
                                    <div class="form-group">
                                          {{ Form::label('name', 'Name:') }}
                                             {{ Form::text('name', Input::old('name'), array('placeholder' => '','class' =>'form-control')) }}
                                            
											
                                        </div>
                                     
                                     
                                         <div class="form-group">
                                           {{ Form::label('email', 'Email Address:') }}
                                           {{ Form::text('email', Input::old('email') ,array('class' =>'form-control')) }}
                                        </div>
										
										<div class="form-group">
                                           {{ Form::label('phone', 'Phone:') }}
                                           {{ Form::text('phone' ,Input::old('phone'),array('class' =>'form-control')) }}
                                        </div>
                                     
										
                                   
                                   
                                      
									  
										
										{{ Form::submit('Submit') }}
                                       
									   
                                   {{ Form::close() }}
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
							   
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>






</div>


@stop
