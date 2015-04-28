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
	require_once("../classes/MainClass.php");
	
?>
<div class="container">
		<div class="row">
		<div class="col-sm-4">
		
    			<a href="editProfile.php" class="btn btn-primary"> EDIT PROFILE 
      		
			 	</a>
		</div>
			<div class="col-sm-4 col-sm-offset-4">
    			<form method="get" action="../login/checkLogin.php" class="form-signin">
        			
					<button class="btn btn-primary btn-block" name="logout" value="log in" type="submit">Log Out</button>
      			</form>
			 
		</div>
		</div>
</div>

 </body>
</html>
