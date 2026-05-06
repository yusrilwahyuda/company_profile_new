@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Sosial Media Desaku</title>
    <link rel="icon" href="/logo.png" type="image/png" sizes="16x16"> 
    
	<link rel="stylesheet" href="{{ asset('/Winku-Social-Network-Corporate-Responsive-Template/css/main.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/Winku-Social-Network-Corporate-Responsive-Template/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('/Winku-Social-Network-Corporate-Responsive-Template/css/color.css') }}">
	<link rel="stylesheet" href="{{ asset('/Winku-Social-Network-Corporate-Responsive-Template/css/responsive.css') }}">

</head>
<style type="text/css">
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -25px;
  position: relative;
  z-index: 2;
}

.chosen-container {
	/*border: 1px solid #ced4da;*/
	/*border-radius: 0.25rem;*/
	/*padding-right: 15px;*/
}

.chosen-single {
	color: #b7b7b7;
	text-transform: capitalize;
}

.chosen-container-single .chosen-single {
	border-width: 0 0 0;
	padding: 0 0 0 0;
	border-bottom: 1px solid #ced4da;
	/*border-radius: 0.25rem;*/
	color: #b7b7b7;
	background: white;
}

.chosen-container-single .chosen-single span {
	margin-left: 5px;
	color: #2a2a2a;
    font-size: 1rem;
}

.chosen-container .chosen-results li.highlighted {
	background-color: #358f66;
	background-image: -webkit-gradient(linear, 50% 0, 50% 100%, color-stop(20%, #358f61), color-stop(90%, #358f66));
    background-image: -webkit-linear-gradient(#358f61 20%, #358f66 90%);
    background-image: -moz-linear-gradient(#358f61 20%, #358f66 90%);
    background-image: -o-linear-gradient(#358f61 20%, #358f66 90%);
    background-image: linear-gradient(#358f61 20%, #358f66 90%);
}

.form-control:focus{
	border-color: #ced4da;
	box-shadow: none;
}

.help-block{
	font-size: 10px;
	color: red;
}

select.form-control:not([size]):not([multiple]) {
    text-transform: capitalize;
}

.form-group{
	margin-top: 10px;
	margin-bottom: 10px;
}

.land-featureareaa{
	background-color: #4682B4;
}
.content{
	background-color: #4682B4;
	padding:20px;
	margin-top: 80px;
	margin-left: 140px;
	width:400px;
	color: white;	
}

</style>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 land-featureareaa">
				<div class="content">
					<center><img src="{{ url('/logo/JAMKERJA.png')}}" style="width: 100%; object-fit: cover;">
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
					@if (Session::get('success'))
					    <div class="alert alert-success">
					        {{ Session::get('success') }}
					        <button type="button" class="close" data-dismiss="alert">&times;</button>
					    </div>
					@elseif(Session::get('alert'))
						<div class="alert alert-danger">
					        {{ Session::get('alert') }}
					        <button type="button" class="close" data-dismiss="alert">&times;</button>
					    </div>
					@endif
						<h2 class="log-title">Login</h2>
							<form method="post" action="{{ route('login')}}">
							{{ csrf_field() }}
							<div class="form-group">	
							  	<input type="email" name="email" id="input" class="form-control form-control-sm @error('email') is-invalid @enderror" required="required"/>
							  	<label class="control-label" for="input">Email</label><i class="mtrl-select"></i>
							  	@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="form-group">	
							  	<input type="password" name="password" required="required" id="myInput" class="form-control form-control-sm @error('password') is-invalid @enderror"><span class="fa fa-eye field-icon" id="pass_login_icon" onclick="myFunction()"></span>
							  	<label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
							<div class="submit-btns" style="margin-top: 0px;">
								<button class="mtr-btn" type="submit" style="color: #202c5b"><span>Login</span></button>
							</div>
						</form>
					</div>
					

<script src="{{ asset('/Winku-Social-Network-Corporate-Responsive-Template/js/main.min.js') }}"></script>
<script src="{{ asset('/Winku-Social-Network-Corporate-Responsive-Template/js/script.js') }}"></script>
<script type="text/javascript">
    function myFunction() {
	  var x = document.getElementById("myInput");
	  if (x.type === "password") {
	    x.type = "text";
	    document.getElementById('pass_login_icon').className = "fa fa-eye-slash field-icon";
	  } else {
	    x.type = "password";
	    document.getElementById('pass_login_icon').className = "fa fa-eye field-icon";
	  }
	}

</script>
</body>	
</html>
@endsection