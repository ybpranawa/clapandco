@extends('master')

@section('content')
<div class="banner-top">
	<div class="container">
		<h3 >Register</h3>
		<h4><a href="home">Home</a><label>/</label>Register</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Register</h3>
					<form action="insertregister" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" placeholder="Username" name="Username" class="form-control" required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" name="Email" class="form-control" placeholder="Email" required>
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="password" name="Password" class="form-control" placeholder="Password" required>
							<div class="clearfix"></div>
						</div>
						<input type="submit" value="Submit">
					</form>
				</div>
				
			</div>
		</div>
@endsection