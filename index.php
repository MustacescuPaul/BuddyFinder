<!DOCTYPE html>
<html>
<head>
	<title>BuddyFinder</title>	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<?php include("app/views/templates/header.php"); ?>


</head>
<body>
<?php 
require 'app/views/templates/navbar.php';
?>
<body>

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div id="home-first" class="intro-message">
                        <h1>Buddy Finder</h1>
                        <h3>Rediscover your city</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline">
                            <li>
                                <a href="javascript:app.homeViewSwitch(3)" class="btn btn-default btn-lg"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
                            </li>
                            <li>
                                <a href="javascript:app.homeViewSwitch(2)" class="btn btn-default btn-lg"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                            </li>
                            
                        </ul>
                    </div>
                    <div id="home-second" class="intro-register">
                    	<div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						
						<div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Your Name:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="email" class="cols-sm-2 control-label">Your Email:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="confirm" class="cols-sm-2 control-label">Confirm Password:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password">
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button">Register</button>
						</div>
						<div class="login-register">
				            <a href="javascript:app.homeViewSwitch(3)">Login</a>
				         </div>
					</form>
					</div>
					</div>
                    <div id="home-third" class="intro-message">
                    <div class="main-login main-center">
					<form class="form-horizontal" method="post" action="#">
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Username:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username">
								</div>
							</div>
						</div>

						<div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Password:</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password">
								</div>
							</div>
						</div>

						<div class="form-group ">
							<button type="button" class="btn btn-primary btn-lg btn-block login-button"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</button>
						</div>
						<div class="login-register">
				            <a href="javascript:app.homeViewSwitch(2)">Register</a>
				         </div>
					</form>
					</div>
					</div>

                </div>
            </div>

        </div>
        <!-- /.container -->
    </div>
    <!-- /.intro-header -->
</body>

</html>
