<!DOCTYPE html>
	<head>
	<link rel="stylesheet" type="text/css" href="style/headerstyle.css">
	<link rel="stylesheet" type="text/css" href="style/style.css">
	</head>
<?php
/* Dependent Files */
	require_once('header.php');
	require_once('config.php');
?>

<?php //Open Database Connection

// create connection
$dbc = mysqli_connect($host, $username, $password, $dbname);

//check connection

if (mysqli_connect_errno($dbc))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
  echo "Successful Connection";
  }
?> 

<html>
<div id="page-main-content-wrapper">

add person

</div> <!-- end page content wrapper -->

</html>

<?php mysqli_close($dbc); ?>

<?php require_once('footer.php');  ?>