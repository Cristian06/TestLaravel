<!DOCTYPE html>
<html>
<head>
	<title>Testing</title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	<!-- <script type='text/javascript' src='assets/js/jquery.js'></script> -->
	

	<style type="text/css">
		body{
			margin-top: -20px;
		}
		.parent{
			width: 950px;
			margin: auto;
			background-color: #E9EAED;
		}
		.header{
			width: 700px;
			text-align: center;
			padding-top: 30px;
		}
		.mainContent{
			width: 500px;
			margin-top: 50px;
			/*text-align: center;*/
			margin-left: 110px;
			float: left;
			background-color: white;
			border: 2px solid #5D76B0;
			border-radius: 10px;
			padding: 15px;
		}
		.rightMenu{
			width: 220px;
			margin-top: 50px;
			text-align: center;
			float: right;
			border: 2px solid #5D76B0;
			border-radius: 10px;
			background-color: white;
			margin-right: 50px;
		}
		.cleaner{
			clear: both;

		}
		.footer{
			width: 700px;
			text-align: center;
			margin-top: 130px;
			padding-bottom: 10px;
		}

	</style>

</head>
<body>

	<div class="parent">

		@section('header')
			<div class="header">
				<h2>Mantenedor V1.1</h2>
			</div>
		@show

		<div class="mainContent">
			@yield('mainContent')
		</div>

		@section('rightMenu')
			@yield('rightMenu')
		@show

		@section('cleaner')
			<div class="cleaner">
			</div>
		@show

		@section('footer')
			<div class="footer">
				<h4>18-12-2014</h4>
			</div>
		@show

	</div>

</body>
</html>