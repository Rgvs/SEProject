<?php
  session_start();
  if(!isset($_SESSION['user_type']))
  {
    header("Location: ../login/login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title> Administrator</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
		
			<div class="col-md-4 col-md-offset-8">
    			<form method="get" action="../login/checkLogin.php" class="form-signin">
        			
					<button class="btn btn-primary btn-block" name="logout" value="log in" type="submit">Log Out</button>
      			</form>
			 
		</div>
</div>
<div class="container">
  <h2>Click on Desired</h2>
  <nav>
  <a href="addAppl.php" class="btn btn-primary">ADD Applicant</a> 

  <a href="addCouns.php"  class="btn btn-primary" >ADD Counselor</a>
  
  <a href="removeAppl.php" class="btn btn-primary"> REMOVE Applicant</a>
  
  <a href="removeCouns.php"  class="btn btn-danger" >REMOVE Counselor</a>
   
  <a href="reassign.php" class="btn btn-warning"> Re-assign </a>

  </nav>
</div>



</body>
</html>

