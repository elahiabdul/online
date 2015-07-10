
@extends('layouts.inner')
@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Contacts</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           Contact List
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                        
                         {{ Form::open(array('url' => 'contacts/search')) }}
                         {{ Form::text('query', Input::old('query'), array('placeholder' => 'search','class' =>'form-control')) }}
                       	 {{ Form::submit('Search') }}
                         {{ Form::close() }}
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="contactlist">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($contacts as $contact)
                                        <tr class="odd gradeX">
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->Phone }}</td>
                                           
                                           
                                        </tr>
                                        
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
          
		  
        </div>
        
        @stop
