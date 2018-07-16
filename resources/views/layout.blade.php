<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upshoot Tech Test</title>

	<link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap CSS -->
	<link href="css/{{$page}}.css" rel="stylesheet"> <!-- Custom CSS for this page -->
  </head>

  <body>

    <div class="container">

		<div>
		
		@yield('content')

		</div>

    </div><!-- /.container -->


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script> <!-- Bootstrap Javascript -->
	<script type="text/javascript" src="js/{{$page}}.js"></script> <!-- Custom Javascript for this page -->
  </body>
</html>
