<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('style/style.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title>VDTexpress</title>
</head>
<body id="bodyssss">
	<br />
	<div class="container boxs">
	{{-- 	<p align="center" id="login">Đăng nhập VDTexpress</p><br /> --}}
		<p id="pqas"><img id="imglogin" src="{{asset('images/vdtgroup.png')}}" alt=""></p>
		
		@if(isset(Auth::user()->email))
			<script>window.location="/Admincp/successlogin";</script>

		@endif

		@if ($message = Session::get('error'))
		<div class="alert alert-danger alert-block">
			<button type="button" class="close" data-dismiss="alert">x</button>
			<strong>{{ $message }}</strong>
		</div>
		@endif
		
		@if(count($errors) > 0)
			<div class="alert alert-danger">
				<ul>
					@foreach($errors->all() as $errors)
						<li>{{ $errors }}</li>
					@endforeach 
				</ul>
			</div>
		@endif

		<form method="post" action="{{ url('/Admincp/checklogin') }}">
			{{ csrf_field() }}
			<div class="form-group">
				<label id="login">Nhập Email</label>
				<input type="email" name="email" class="form-control" />
			</div>
			<div class="form-group">
				<label id="login">Nhập Password</label>
				<input type="password" name="password" class="form-control" />
			</div>
			<div class="form-group">
				<input type="submit" name="login" class="btn btn-primary" value="Đăng Nhập" />
				<a href="{{URL::Route('reg')}}"><span id="reelogin" class=""><i class="fas fa-registered"></i> Đăng ký</span></a>
			</div>
		</form>
	</div>
</body>
</html>