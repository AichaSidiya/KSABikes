<?php

include('databaseConnection.php');

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM bike
 ";
 $statement = $connection->prepare($query);
 $statement->execute();
 $result = $statement->fetchAll();
 $totalRow = $statement->rowCount();
 $output = '';
 if($totalRow > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="c">
   <form action= "listings.php" method="post" id="form">
   <input type="image" class="dimage" src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" alt="Submit">
   <input type = "hidden" id="bikeID" name="bikeID" value = '.$row['bikeID'].'>
   </form>
   <h3 class="name listing"> '.$row['name'].'</h3>
   <h3 class="year listing">' .$row['year']. '</h3>
   <p class="price listing">'.$row['price'].' SAR</p>
   </div>
   ';
  }
 }
 else
 {
  $output = '<h3>There are no bikes in the database</h3>';
 }
 echo $output;
}

?>
