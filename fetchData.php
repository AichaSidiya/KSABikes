<?php

include('databaseConnection.php');

if(isset($_POST["action"]))
{
 $query = "
  SELECT * FROM bike WHERE productStatus = '1'
 ";
 if(isset($_POST["city"] ))
 {
  $cityFilter = implode("','", $_POST["city"]);
  $query .= " AND city IN('".$cityFilter."')";
 }
 if(isset($_POST["make"]))
 {
  $makeFilter = implode("','", $_POST["make"]);
  $query .= "AND  make IN('".$makeFilter."')";
 }
 if(isset($_POST["model"]))
 {
  $modelFilter = implode("','", $_POST["model"]);
  $query .= "AND model IN('".$modelFilter."')";
 }

 if(isset($_POST["min"], $_POST["max"]) && !empty($_POST["min"]) && !empty($_POST["max"]))
 {
  $query .= "
   AND price BETWEEN '".$_POST["min"]."' AND '".$_POST["max"]."'
  ";
 }

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
  $output = '<h1 class="titlet">No bikes available!</h1>';
 }
 echo $output;
}

?>
