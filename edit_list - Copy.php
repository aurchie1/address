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


<?php 		//display table of list entries
// create connection
$dbc = mysqli_connect($host, $username, $password, $dbname) or die("Could Not Connect");

$query = "SELECT * FROM list_type";   //get the data

  $result = mysqli_query($dbc, $query)
    or die('Error querying database.'); ?>
	
	<p class="page-title"> These are the currently defined lists. </p>
	
	<table border="1" class="table-display">
	  <tr>
		<th>List ID</th>
		<th>List Name</th>
		<th>Edit/Delete</th>
	  </tr>
	  
	  <?php 
		while ($row = mysqli_fetch_array($result)){
		$list_id = $row['list_id'];
		$list_name = $row['list_name'];	
			
		echo "<tr>
	  		<td>" . $list_id . "</td>" ;
		echo "<td>" . $list_name . "</td>";
		echo "<td> <a href='#'>Edit</a> / <a href='#'>Delete</a>";
		echo "</tr>";
	  }
	  
	  
	 echo "</table>";
	 
	 ?>
	 
	 <?php
	 if (isset($_POST['submit'])) {
    $new_list = $_POST['newlist'];
    $output_form = 'no';

    if (empty($new_list)) {
      // We know at least one of the input fields is blank 
      echo "<p class='error'> Please fill out a new list name. </p> <br />";
      $output_form = 'yes';
    }
  }
  else {
    $output_form = 'yes';
  }

  if (!empty($new_list)) {
    $dbc = mysqli_connect($host, $username, $password, $dbname) or die("Could Not Connect");

    $query = "INSERT INTO list_type(list_id ,list_name) VALUES (NULL, '$new_list')";
	
    mysqli_query($dbc, $query)
      or die ('Data not inserted.');

    echo 'Added to list, click to <a href="edit_list.php"> refresh </a>';

    mysqli_close($dbc);
  }

  if ($output_form == 'yes') {
?>
<p class="page-text"> Use the below form to add a list </p>
<form name="nlist" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
		
		<label for="nlist">Add to List:</label>
		<input type="text" id="newlist" name="newlist" />
		<input type="submit" name="submit" value="Add It">
		</form>
  
<?php
  }
?>

	
<html>


</div> <!-- end page content wrapper -->

</html>

<?php require_once('footer.php');  ?>