<!DOCTYPE html>
<html lang="en">
<head>
  <title>Administrator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
		
	<div class="col-md-1 col-md-offset-1">
  			<a href="../check_login.php" class="btn btn-primary">BACK</a> 
	</div>
</div>
		
		
<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
    			<form method="post" action="../Check_add_appl.php" >
        			<h2 class="form-signin-heading">Add Applicant</h2>
        			<label for="Userfname" class="sr-only">First Name</label>
        			<input type="username" id="inputUsername" class="form-control" name="first_name" placeholder="Fname" required autofocus> </br>
        			
        			<label for="Userlname" class="sr-only">Last Name</label>
        			<input type="username" id="inputUsername" class="form-control" name="last_name" placeholder="Lname" required autofocus> </br>
        			
        			
        			<label for="inputUsernamemail" class="sr-only">User email</label>
        			<input type="username" id="inputUsername" class="form-control" name="user_email" placeholder="User-email" required autofocus> </br>
        			
	        		<label for="inputPassword" class="sr-only">Password</label>
	        		<input type="password" id="inputPassword" class="form-control" name="user_password" placeholder="Password" required> </br>
	        		<label for="inputUsernamemail" class="sr-only">Counselor email</label>
        			<input type="username" id="inputUsername" class="form-control" name="user_counselor_email" placeholder="Counselor email" required autofocus> </br>
					<button class="btn btn-lg btn-primary btn-block" name="adding_appl" value="add" type="submit">Add Counselor</button>
      			</form>
			 </div>
		</div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

