@extends('master')

@section('content')
<div class="banner-top">
	<div class="container">
		<h3 >Login</h3>
		<h4><a href="home">Home</a><label>/</label>Login</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Login</h3>
					<form action="dologin" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" placeholder="Username" name="Username" class="form-control" required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" name="Password" class="form-control" placeholder="Password" required>
							<div class="clearfix"></div>
						</div>
                        <input type="submit" value="Login">
					</form>
				</div>
				<div class="forg">
					<a href="forgot" class="forg-left">Forgot Password</a>
					<a href="register" class="forg-right">Register</a>
				<div class="clearfix"></div>
				</div>
			</div>
		</div>
@endsection