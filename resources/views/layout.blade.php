<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title','Office Status')</title>
			
		<!-- Bootstrap -->
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

		<style>
			.navbar {
				border-radius: 0;
			}
			.req {
				color: #F00;
			}
			.container {
				width: 100%;
			}
			.table-striped th:last-child, .table-striped td:last-child {
				width: 1px;
				white-space: nowrap;
			}
		</style>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->

		<meta http-equiv="refresh" content="300">
	</head>
	<body>
		<div class="navbar navbar-inverse" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<!-- <cfIf sb.isLoggedIn> -->
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					<!-- </cfIf> -->
					<a class="navbar-brand" href="index.htm">
						Office Status
					</a>
				</div>
				<!-- <cfIf sb.isLoggedIn> -->
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Welcome, <!-- <cfOutput>#session.user.fName# #session.user.lName#</cfOutput> --></a>
						</li>
						<li>
							<a href="/officestatus/logout"><span class="glyphicon glyphicon-lock"></span> logout</a>
						</li>
					</ul>
					<ul class="nav navbar-nav">
						<!-- <li <cfIf sb.routing[1] EQ "status">class="active"</cfIf>> -->
						<li>
							<a href="{{ url('/') }}">Dashboard</a>
						</li>
						<!-- <li <cfIf sb.routing[1] EQ "employee">class="active"</cfIf>> -->
						<li>
							<a href="{{ url('/users') }}">Employees </a>
						</li>
						<!-- <li <cfIf sb.routing[1] EQ "note">class="active"</cfIf>> -->
						<li>
							<a href="{{ url('/status') }}">Status </a>
						</li>
					</ul>
				</div>
				<!-- </cfIf> -->
			</div>
		</div>
		<div class="container">
			<div class="content">
			 @if (Route::has('login'))
				<div class="top-right links">
					@auth
						<a href="{{ url('/home') }}">Home</a>
					@else
						<a href="{{ route('login') }}">Login</a>

						@if (Route::has('register'))
							<a href="{{ route('register') }}">Register</a>
						@endif
					@endauth
				</div>
			@endif
			@yield('content')
			</div>
		</div>
		<footer>
			<p>
				&copy;<?= date('Y') ?> <a href="http://www.gvsu.edu/">Grand Valley State University</a> - <a href="http://www.gvsu.edu/webteam/">GVSU Web Team</a>
			</p>
		</footer>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</body>
</html>