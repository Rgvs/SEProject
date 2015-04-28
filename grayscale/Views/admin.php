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
		
			<div class="col-md-1 col-md-offset-9">
    			<form method="get" action="check_login.php" class="form-signin">
        			
					<button class="btn btn-primary btn-block" name="logout" value="log in" type="submit">Log Out</button>
      			</form>
			 
		</div>
</div>
<div class="container">
  <h2>Click on Desired</h2>
  <nav>
  <a href="Views/Add_Appl.php" class="btn btn-primary">ADD Applicant</a> 

  <a href="Views/Add_Couns.php"  class="btn btn-primary" >ADD Counselor</a>
  
  <a href="Views/Remove_Appl.php" class="btn btn-primary"> REMOVE Applicant</a>
  
  <a href="Views/Remove_Couns.php"  class="btn btn-danger" >REMOVE Counselor</a>
   
  <a href="Views/Reassign.php" class="btn btn-warning"> Re-assign </a>
  </nav>
</div>



</body>
</html>

