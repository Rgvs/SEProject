<!DOCTYPE html>
<html lang="en">
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<title>Edutick</title>
</head>
<body>
	

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
    			<form method="post" action="check_login.php" class="form-signin">
        			<h2 class="form-signin-heading">Please sign in</h2>
        			<label for="inputUsernamemail" class="sr-only">Username</label>
        			<input type="username" id="inputUsername" class="form-control" name="user_name" placeholder="Username" required autofocus> </br>
	        		<label for="inputPassword" class="sr-only">Password</label>
	        		<input type="password" id="inputPassword" class="form-control" name="user_password" placeholder="Password" required> </br>
					<button class="btn btn-lg btn-primary btn-block" name="login" value="log in" type="submit">Sign in</button>
      			</form>
			 </div>
		</div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
