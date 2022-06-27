<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="ZGG admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
		<meta name="keywords" content="admin template, ZGG admin , dashboard template, flat admin, responsive admin template, web app">
		<meta name="author" content="ZGG">
        <link rel="icon" href="{{asset('/adminAssets/images/favicon.ico')}}" type="image/x-icon">
        <link rel="shortcut icon" href="{{asset('/adminAssets/images/favicon.ico')}}" type="image/x-icon">
        <title>Gippokamp</title>
		<!-- Google font-->
		<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">

		@include('layouts.authentication.css')
		
		@yield('style')	
	
	</head>
	<body style="background-color: #ECF0FA">
			@yield('content')
			@include('layouts.authentication.script')
	</body>
</html>
