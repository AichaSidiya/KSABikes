<?php
include('databaseConnection.php');
  if(!$connection){
      die('Could not Connect MySql Server:' .mysql_error());
    }
$make = $_POST["make"];
$result = mysqli_query($connection,"SELECT DISTINCT(model) FROM bike where make = '$make'");
?>
<option value="">Select</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option class = "model" value="<?php echo $row['model'];?>"><?php echo $row['model'];?></option>
<?php
}
?>