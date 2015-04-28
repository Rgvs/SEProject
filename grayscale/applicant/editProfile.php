<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/customize.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="../js/customize.js"></script>
</head>

<body>
<?php
	include_once("../classes/MainClass.php");
	
?>
<div class="container">
		
			<div class="col-md-1 ">
    			<a href="../login/checkLogin.php" class="btn btn-primary">BACK</a> 
			 </div>
		</div>
<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
    			<form method="post" action="../checkAddCouns.php" >
        			<h2 class="form-signin-heading">Enter your details</h2>
        			<label for="Userfname" class="sr-only">Enter College </label>
        			<input type="username" id="inputUsername" class="form-control" name="college" placeholder="Enter College" required autofocus> </br>
        			
        			<label for="Userlname" class="sr-only"> Branch of Study</label>
        			<input type="username" id="inputUsername" class="form-control" name="branch" placeholder="Branch of Study" required autofocus> </br>
        			
        			
        			<label for="inputUsernamemail" class="sr-only">Year of Completion</label>
        			<input type="number" id="inputUsername" class="form-control" name="year" placeholder="Year of Completion" required autofocus> </br>
        			<h4> Date of Birth </h4>
	        		<label for="inputPassword" class="sr-only">Date of Birth</label>
	        		<input type="date" id="inputPassword" class="form-control" name="date" required> </br>
	        		
	        		<label for="Userlname" class="sr-only"> CGPA</label>
        			<input type="username" id="inputUsername" class="form-control" name="CGPA" placeholder="CGPA" autofocus> </br>
        			<label for="Userlname" class="sr-only"> GRE Score</label>
        			<input type="number" id="inputUsername" class="form-control" name="GRE Score" placeholder="GRE Score" autofocus> </br>
        			<label for="Userlname" class="sr-only"> TOEFL Score</label>
        			<input type="number" id="inputUsername" class="form-control" name="TOEFL Score" placeholder="TOEFL Score" autofocus> </br>
        			
					<button class="btn btn-lg btn-primary btn-block" name="firstVisit" value="visit" type="submit">SAVE</button>
      			</form>
			 </div>
		</div>

    </div> <!-- /container -->
    
  </body>
</html>
