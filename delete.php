<?php 

require_once 'dbconnect.php';
if(isset($_POST['sightseeing'])){
		$sName = $_POST['sName'];
		$sql = "DELETE FROM `sightseeing` WHERE sName = {$sName}";
		if($connect->query($sql) === TRUE) {
			header("Location: adminpanel.php");
		} else {
			echo "Error while deleting record: ". $connect->error;
		}
	
   
}
?>

<!DOCTYPE html>
<html>
<head>
   <title>Delete </title>
</head>
<body>

<h3>Do you really want to delete this info?</h3>
<form  method="post" >
	

   <input type="hidden" name="sName" value="<?php echo $row['sName'] ?>" />
   <button type="submit" name="sightseeing">Yes, delete it!</button>
   <a href="index.php"><button type="button">No, go back!</button></a>
</form>

</body>
</html>



