
@extends('admin.layouts.app_admin_login')

@section('main-content')

<body class="hold-transition register-page">
<div class="register-box">
	<div class="register-logo">
		<a href="../../index2.html"><b>Admin</b>LTE</a>
	</div>

	<div class="register-box-body">
		<p class="login-box-msg">Register a new membership</p>

		<form action="{{route('admin.register')}}" method="POST">
			@csrf

			<div class="form-group has-feedback">
				<input name="name" type="text" class="form-control" placeholder="Full name">
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
			</div>
			<div class="form-group has-feedback">
				<input name="email" type="email" class="form-control" placeholder="Email">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>


			<div class="form-group has-feedback">
				<input name="phone_number" type="text" class="form-control" placeholder="Phone">
				<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
			</div>


			<div class="form-group has-feedback">
				<input name="password" type="password" class="form-control" placeholder="Password">
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
			</div>

			<div class="form-group has-feedback">
				<input name="password_confirmation" type="password" class="form-control" placeholder="Retype password">
				<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
			</div>


			<div class="row">
				<div class="col-xs-8">
					<div class="checkbox icheck">
						<label>
							{{--<input type="checkbox"> I agree to the <a href="#">terms</a>--}}
						</label>
					</div>
				</div>
				<!-- /.col -->
				<div class="col-xs-4">
					<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
				</div>
				<!-- /.col -->
			</div>

		</form>

		<div class="social-auth-links text-center">
			<p>- OR -</p>
			<a href="https://www.facebook.com/" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
				Facebook</a>
			<a href="https://mail.google.com/" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
				Google+</a>
		</div>

		<a href="{{route('admin.login')}}" class="text-center">I already have a membership</a>
	</div>
	<!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>
</body>

<!-- Mirrored from adminlte.io/themes/AdminLTE/pages/examples/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jul 2021 14:49:12 GMT -->
</html>

@endsection



{{--@extends('admin.layouts.app_admin_login')--}}

  {{--@section('main-content')--}}

	  {{--<!-- Main Wrapper -->--}}
	  {{--<div class="main-wrapper login-body">--}}
		  {{--<div class="login-wrapper">--}}
			  {{--<div class="container">--}}
				  {{--<div class="loginbox">--}}
					  {{--<div class="login-left">--}}
						  {{--<img class="img-fluid" src="{{asset('admin/assets/img/logo-white.png')}}" alt="Logo">--}}
					  {{--</div>--}}
					  {{--<div class="login-right">--}}
						  {{--<div class="login-right-wrap">--}}
							  {{--<h1>Register</h1>--}}
							  {{--<p class="account-subtitle">Access to our dashboard</p>--}}

							  {{--<!-- Form -->--}}
							  {{--<form action="{{route('admin.register')}}" method="POST">--}}
								  {{--@csrf--}}
								  {{--<div class="form-group">--}}
									  {{--<input name="name" class="form-control" type="text" placeholder="Name">--}}
								  {{--</div>--}}
								  {{--<div class="form-group">--}}
									  {{--<input name="email" class="form-control" type="text" placeholder="Email">--}}
								  {{--</div>--}}

								  {{--<div class="form-group">--}}
									  {{--<input name="phone_number" class="form-control" type="text" placeholder="Phone">--}}
								  {{--</div>--}}

								  {{--<div class="form-group">--}}
									  {{--<input name="password" class="form-control" type="text" placeholder="Password">--}}
								  {{--</div>--}}
								  {{--<div class="form-group">--}}
									  {{--<input name="password_confirmation" class="form-control" type="text" placeholder="Confirm Password">--}}
								  {{--</div>--}}
								  {{--<div class="form-group mb-0">--}}
									  {{--<button class="btn btn-primary btn-block" type="submit">Register</button>--}}
								  {{--</div>--}}
							  {{--</form>--}}
							  {{--<!-- /Form -->--}}

							  {{--<div class="login-or">--}}
								  {{--<span class="or-line"></span>--}}
								  {{--<span class="span-or">or</span>--}}
							  {{--</div>--}}

							  {{--<!-- Social Login -->--}}
							  {{--<div class="social-login">--}}
								  {{--<span>Register with</span>--}}
								  {{--<a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>--}}
							  {{--</div>--}}
							  {{--<!-- /Social Login -->--}}

							  {{--<div class="text-center dont-have">Already have an account? <a href="{{route('admin.login')}}">Login</a></div>--}}
						  {{--</div>--}}
					  {{--</div>--}}
				  {{--</div>--}}
			  {{--</div>--}}
		  {{--</div>--}}
	  {{--</div>--}}
	  {{--<!-- /Main Wrapper -->--}}

 {{--@endsection--}}


