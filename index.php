<?php 

include('databaseConnection.php');

?>
<!DOCTYPE html>
<html>

<head lang="en">

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>KSA Bikes</title>
   <link rel="icon" type="image/x-icon" href="flav.png">
   <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
   <script language="JavaScript" type="text/javascript" src="filter.js"></script> 
   <script language="JavaScript" type="text/javascript" src="dropdownFilter.js"></script> 
   <link rel="stylesheet" href="reset.css">
   <link rel="stylesheet" href="style.css">
</head>

<body>
<header>
  <a href="index.php">
    <img src="logo.png" alt="logo" name="logo" id="logo">
</a>
    <div id="siz">
      <h1>Where you can find your dream bike</h1>
</div>
    <div class = "list">
    <ul class = "mylist">
      <li class="listitem" ><a href="arabic/arabindex.php">عربي |</a></li>
      <li class="listitem"><a href="advertise.php">Advertise |</a></li>
    <li class="listitem"><img src="phone.png" alt="phone" name="phone" id="phone" class="phone"></li>
      <li class="listitem">0501506968</li>

    </ul>
</div>

</header>



<div class="main">

  <h1 class="titlet">BIKES FOR SALE IN SAUDI ARABIA</h1>
  <br>
  <br>
  <div class="filter">
  <label class = "pad" for="city" style="margin-top:0.2em;">City:</label>
  <select name="city" id="city" class="height">
  <option value="" >Select</option>
  <?php

$query = "SELECT DISTINCT(city) FROM bike";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
?>
    <option class = "city" value="<?php echo $row['city']; ?>"  > <?php echo $row['city']; ?>
<?php
}

?>
</select>

     <label class = "pad" for="make" style="margin-top:0.2em;">Make:</label>
    <select name="make" id="make"  class="height">
    <option value="" >Select</option>

    <?php

$query = "SELECT DISTINCT(make) FROM bike";
$statement = $connection->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach($result as $row)
{
?>
    <option class = "make" value="<?php echo $row['make']; ?>"  > <?php echo $row['make']; ?></option>
<?php
}

?>
    </select>

</select>
    <label class = "pad" style="margin-top:0.2em;" for = "model">Model:</label>
     <select name = "model" id="model"  class="height">
     <option value="">Select</option>
     </select>

     <label class = "pad" for = "price" style="margin-top:0.2em;">Price Range</label>
      <input type="text" class="height2" id="min" name="min" size="3" placeholder="min"/>
      <label class = "pad " for = "price" style="margin-top:0.2em;">to</label>
      <input class="alone height2" type="text" id="max" name="max" size="3" placeholder="max"/>
      <div id="priceRange"></div>
      <div class="myDiv">
      <button type="button" name="Go" id="filter" class="button" style="margin-top:-0.1em;">Go</button>
      <button type="button" name="reset" id="reset" style="margin-top:-0.1em;" class="resetButton" >Reset</button>
</div>
</div>
</div>

<div class="filterData">

</div>
<footer>	
<div class='theright'>	
      <div id = "second">	
         <a href="https://www.instagram.com/accounts/login/?next=/ksa.bikes/"><img src="instacon.png" name="insta" alt="insta" id="insta"></a>	
        <a href="https://twitter.com/ksabikes?fbclid=IwAR3IlK_X7ayVICXjpD3dec49Snc5mPM04e4XBeDMMON2MCEjQf7i4wOI4gA"><img src="twitcon.png" name="twit" alt="twit" id="twit"></a>	
        <a href = "https://www.snapchat.com/add/ksabikes?fbclid=IwAR1D8LyYSaH65wLFxStZY_tJF-WiNJs_exGOAyYBgGOO4mHBu_Cq0mhihZ8"><img src="snapcon.png" name="snap" alt="snap" id="snap"></a>	
        <a href="https://www.facebook.com/Ksabikes-102377671836286/"><img src="facecon.png" name="face" alt="face" id="face"></a>	
        <a href="TermsConditions.php" style="text-decorations:none; color:inherit;" class="rightfoot"> Terms & Conditions </a>	
      </div>	
    </div>	
</div>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</footer>
	</body>

</html>
