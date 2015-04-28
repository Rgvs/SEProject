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
    			<form method="post" action="../check_add.php" >
        			<h2 class="form-signin-heading">Re-assign</h2>
        			
        			<label for="inputUsernamemail" class="sr-only">Applicant email</label>
        			<input type="username" id="inputUsername" class="form-control" name="appl_email" placeholder="Applicant-email" required autofocus> </br>
        			
        			
        			<label for="inputUsernamemail" class="sr-only">Counselor email</label>
        			<input type="username" id="inputUsername" class="form-control" name="couns_email" placeholder="Counselor-email" required autofocus> </br>
					<button class="btn btn-lg btn-primary btn-block" name="reassign" value="reassign" type="submit">Re-Assign</button>
      			</form>
			 </div>
		</div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

</body>
</html>

