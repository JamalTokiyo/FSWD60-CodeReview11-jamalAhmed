<?php 

require_once 'dbconnect.php';

if($_POST) {
   $sName = $_POST['sName'];

   $sql = "DELETE FROM sighseeing WHERE sName = {$sName}";
   if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>";
       echo "<a href='index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>