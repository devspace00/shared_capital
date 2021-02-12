<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Login</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "icon" href="image/Logo.png">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
    <div class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Icon -->
			<img src="image/Logo.png" id="icon" alt="User Icon" />
			<h1>Shared Capital</h1>
			<br>
			{{-- 			
			@if(isset(Auth::user()->email))
				<script>window.location="Transaction_History";</script>
			@endif --}}

			<!--Messsage Error-->
			{{-- @if ($message = Session::get('error'))
			<div class="alert alert-danger alert-block">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>{{ $message }}</strong>
			</div>
			@endif --}}

 			{{-- fetch error --}}
			{{-- @if (count($errors) > 0)
				<div class="alert alert-danger">
				<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
				</ul>
				</div>
			@endif --}}

			<!-- Login Form -->
			<form action="index" method="POST">
				{{ csrf_field() }}
				@if (\Session::has('error'))
					<div class="alert alert-warning">
						{!! \Session::get('error') !!}
					</div>
				@endif
				<input type="text" name="username" placeholder="Username" autocomplete="off"> <br>
				<span style="color: red">@error('username'){{$message}}@enderror</span>
				<br>
				<input type="password" name="password" placeholder="Password"> <br>
				<span style="color: red">@error('error'){{$message}}@enderror</span>
				<br>
				<button type="submit" name="login">
					{{-- <a href="{{ route('transHistory') }}" style="color: white; font-size:medium;">Login</a> --}}
					Login
				</button>
				<p>&copy; 2019-2020</p>
			</form>
		</div>
  	</div>	
</body>
</html>



