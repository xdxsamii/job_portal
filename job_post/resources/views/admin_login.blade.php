<!DOCTYPE html>
<html lang="en">
<head>
	
		<meta charset="utf-8">
	<title>Job House Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link id="bootstrap-style" href="{{asset('backend/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('backend/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('backend/css/style.css')}}" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
		<link rel="shortcut icon" href="{{URL::to('backend/img/favicon.ico')}}">
		
			<style type="text/css">
			body { background: url(backend/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
		<div class="container-fluid-full">
		<div class="row-fluid">
					
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<p class="alert-danger">
					<?php
					$messege = Session::get('message');
					if ($messege) {
						echo $messege;
						Session::put('message',null);
					}
					
					?>
					</p>
					<h2>Admin login</h2>
					<form class="form-horizontal" action="{{url::to('/admin-dashboard')}}" method="post">
					
					{{ csrf_field() }}
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="admin_email" id="username" type="text" placeholder="Admin Email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="admin_password" id="password" type="password" placeholder="Admin password"/>
							</div>
							<div class="clearfix"></div>
							
							

							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
					
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div>			</div>			

	</div>	
		</div>
	
	

		<script src="{{asset('backend/js/jquery-1.9.1.min.js')}}"></script>
	    <script src="{{asset('backend/js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery-ui-1.10.0.custom.min.js')}}"></script>
		<script src="{{asset('backend/js/jquery.ui.touch-punch.js')}}"></script>	
		<script src="{{asset('backend/js/modernizr.js')}}"></script>
		<script src="{{asset('backend/js/bootstrap.min.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.cookie.js')}}"></script>	
		<script src="{{asset('backend/js/excanvas.js')}}"></script>	
		<script src="{{asset('backend/js/jquery.uniform.min.js')}}"></script>	
		<script src="{{asset('backend/js/custom.js')}}"></script>
		
</body>

</html>
