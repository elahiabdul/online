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
	
	@yield('content')
</body>

{{HTML::script('/assets/bower_components/bootstrap/dist/js/bootstrap.min.js') }}

{{HTML::script('/assets/bower_components/metisMenu/dist/metisMenu.min.js') }}
{{HTML::script('/assets/dist/js/sb-admin-2.js') }}


 
 </html>
