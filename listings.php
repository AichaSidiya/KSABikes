<!DOCTYPE html>
<html>

<head lang="en">

   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="flav.png">
   <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <script language="JavaScript" type="text/javascript" src="scriptf.js"></script>
   <link rel="stylesheet" href="reset.css">
   <link rel="stylesheet" href="style.css">

   <title>KSA Bikes</title>

<body>
<header style="z-index:1;">
    <a href="index.php"> <img src="logo.png" alt="logo" name="logo" id="logo"> </a>

    <div id="siz"></div>

<div class = "list">
    <ul class = "mylist">
      <li class="listitem" ><a href="arabic/arabindex.php">عربي |</a></li>
      <li class="listitem"><a href="advertise.php" style="text-decorations:none; color:inherit;">Advertise |</a></li>
    <li class="listitem"><img src="phone.png" alt="phone" name="phone" id="phone" style="width: 7%;" class="phone"></li>
      <li class="listitem">050-150-6968</li>

    </ul>
</div>
</header>
<div style="height:10px"></div>



<div class="main">
  <div class = "center">
<div class ="new">
  <br>
<article style="z-index:0;">
  <?php
                    include('databaseConnection.php');
					$error = mysqli_connect_error();
					if($error != null)
						echo("There is a problem".$error);

            $bikeID = $_POST['bikeID'];

					$sql = "SELECT * from bike WHERE bikeID = '".$bikeID."'";

                    $result = mysqli_query($connection,$sql);





					echo "";
					if(mysqli_num_rows($result) == 0)
					{
						echo "<h4>There are no bikes in the database!</h4>";
					}
					else
                    {
						while( $row = mysqli_fetch_assoc($result) )
						{

              					echo '
                        <article>
                        <div class="container-fluid cars">

                        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" class="myImage" alt="...">
              </div>
              <div class="carousel-item">
                <img src="data:image/jpeg;base64,' . base64_encode($row['image2']) . '" class="myImage" alt="...">
              </div>
              <div class="carousel-item">
                <img src="data:image/jpeg;base64,' . base64_encode($row['image3']) . '" class="myImage" alt="...">
              </div>
              <div class="carousel-item">
                <img src="data:image/jpeg;base64,' . base64_encode($row['image4']) . '" class="myImage" alt="...">
              </div>
              <div class="carousel-item">
                <img src="data:image/jpeg;base64,' . base64_encode($row['image5']) . '" class="myImage" alt="...">
              </div>
            </div>
         
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
                        </div>
                        </article>
                        ';

                          echo " <div class='details'>
                          <div class ='myTitle'>
                          <h3 id = 'myName' class='listing3'>" .$row['name']. "</h3></div>

                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>City</p>
                          <p class='ss'>".$row['city']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Engine Displacement</p>
                          <p class='ss'>".$row['engine_displacement']." cc</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Mileage</p>
                          <p class='ss'>".$row['mileage']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Year</p>
                          <p class='ss'>".$row['year']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Import Source</p>
                          <p class='ss'>".$row['import_source']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Fairing</p>
                          <p class='ss'>".$row['fairing']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Modified</p>
                          <p class='ss'>".$row['modified']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Warranty</p>
                          <p class='ss'>".$row['warranty']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Price</p>
                          <p class='ss'>SAR ".$row['price']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Seller Type</p>
                          <p class='ss'>".$row['seller_type']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Contact Number</p>
                          <p class='ss'>".$row['contact']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Ad Date</p>
                          <p class='ss'>".$row['ad_date']."</p>  
                          </div>
                          <br>

                          <div class='fons' style='display:inline-flex;'>
                          <p class='price2 listing3'>Details:</p>
                          <p class='ss'>".$row['details']."</p>  
                          </div>

                          </div>
                          ";
                        }
                    }
                ?>
</article>
</div>
</div>
<br>
	<footer style="z-index:1;">
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
