
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Hello</title>
	 {{ HTML::style('/assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
	 
	  {{ HTML::style('/assets/bower_components/metisMenu/dist/metisMenu.min.cs') }}
	  
	   {{ HTML::style('/assets/dist/css/sb-admin-2.css') }}
	   
	    {{ HTML::style('/assets/bower_components/font-awesome/css/font-awesome.min.css') }}
		
	 
	  
	  
	 
</head>	 
	<body>
    <div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    
      <div class="navbar-header">
             
             
                <a class="navbar-brand" href="#">Light House</a>
                
                 
            </div>
            
            <!-- /.navbar-header -->

          
          
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="{{ URL::to('contacts') }} "><i class="fa fa-dashboard fa-fw"></i> Add Contacts</a>
                        </li>
						
						  <li>
                            <a href="{{ URL::to('contacts/list') }}"><i class="fa fa-dashboard fa-fw"></i> List Contacts</a>
                        </li>
                        
                         <li>
                            <a href="{{ URL::to('logout') }}"><i class="fa fa-dashboard fa-fw"></i> Logout</a>
                        </li>
						
						
						
						
                        
						
                   
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
	
	@yield('content')
	
	</div>
</body>

{{HTML::script('/assets/bower_components/jquery/dist/jquery.min.js') }}
{{HTML::script('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}
{{HTML::script('/assets/bower_components/angularjs/angular.min.js') }}
{{HTML::script('/assets/bower_components/metisMenu/dist/metisMenu.min.js') }}
{{HTML::script('/assets/dist/js/sb-admin-2.js') }}





 
 </html>
