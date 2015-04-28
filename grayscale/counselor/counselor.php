<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/customize.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="../js/customize.js"></script>
</head>

<body>
<div class="container">
		
			<div class="col-md-4 col-md-offset-8">
    			<form method="get" action="../login/checkLogin.php" class="form-signin">
        			
					<button class="btn btn-primary btn-block" name="logout" value="log in" type="submit">Log Out</button>
      			</form>
			 
		</div>
</div>
<?php 
  session_start();
  require_once('../classes/MainClass.php');
  $mailidCouns = $_SESSION['mailid']; 

  $appl = new Applicant();
  $rows = $appl->getApplList($mailidCouns);
  if($rows == NULL)
    echo "<h1> No Applicant assigned to you</h1>";
  else
  {
    echo '
	<div class="container-fluid">
		<div class="row">
  			<div class="col-md-4 col-md-offset-5">
  				<h1> Counselor </h1>
  			</div>
  		</div>
	</div>
<div class="panel panel-default">
  <!-- Default panel contents -->
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="text-center">
					<h3 id="Applist">List of Applicants</h3>	
				</div>
			</div>
		</div>
	</div> </br>';          
	
	
	
for($i=0; $i<count($rows);$i++)
{ 

	echo '

<a href="aff">
	<div class="panel panel-default">
  		<div class="panel-heading"> 
  			<div class="row">
  				<div class="col-md-4">
  					Name:
  				</div>
  				<div class="col-md-6">',
  					$rows[$i]['fname']," ",$rows[$i]['lname'], 
  				'</div>
  				<div class="col-md-2">
  				<div class="text-center">
					<button type="button" class="btn btn-default btn-xs" id="Couns-Note-App"  aria-label="Left Align">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</button>
  				</div>
  				</div>
  			</div>
  		</div>
  		<div class="panel-body">
  			<div class="row">
  				<div class="col-md-4">
  					Email:
  				</div>
  				<div class="col-md-8">',
  					$rows[$i]['mailid'],
  				'</div>
  			</div>  		
  		</div>
	</div>
</a>';  
}

}
?>
  </body>
</html>
