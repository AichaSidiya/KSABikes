<!DOCTYPE html>
<html>

<head lang="en">

   <meta charset="utf-8">
   <link rel="icon" type="image/x-icon" href="img/flav.png">
   <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

   <script language="JavaScript" type="text/javascript" src="js/scriptf.js"></script>
   <link rel="stylesheet" href="css/reset.css">
   <link rel="stylesheet" href="css/style.css">

   <title>KSA Bikes</title>

<body>
<header>
    <a href="index.php"> <img src="img/logo.png" alt="logo" name="logo" id="logo"> </a>

    <div id="siz"></div>

<div class = "list" style= "margin-top: 0.01em;">
    <ul class = "mylist">
      <li class="listitem" ><a href="#">عربي |</a></li>
      <li class="listitem"><a href="#" style="text-decorations:none; color:inherit;">Advertise |</a></li>
    <li class="listitem"><img src="img/phone.png" alt="phone" name="phone" id="phone" style="width: 7%;" class="phone"></li>
      <li class="listitem">050-253-6978</li>

    </ul>
</div>
</header>



<div class="main">
  <div class = "center">
<div class ="new">
  <br>

  <?php
                    $connection = mysqli_connect("localhost","root","","ksabikes");
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

                          echo "<div class='details'>
                          <h3 class='name listing'>" .$row['name']. "</h3>
                          <h3 class='year listing'>" .$row['year']. "</h3>
                          <p class='price listing'>".$row['price']."</p>
                           SAR
                          ";
                        }
                    }
                ?>

</div>
</div>

	<footer>
    <div id = "first">Follow us</div>
    <div class='theright'>
      <div id = "second">
         <a href="#"><img src="img/instacon.png" name="insta" alt="insta" id="insta"></a>
        <a href="#"><img src="img/twitcon.png" name="twit" alt="twit" id="twit"></a>
        <a href = "#"><img src="img/snapcon.png" name="snap" alt="snap" id="snap"></a>
        <a href="#"><img src="img/facecon.png" name="face" alt="face" id="face"></a>
        <a href="TermsConditions.php" style="text-decorations:none; color:inherit;" class="rightfoot"> Terms & Conditions </a>

      </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	</footer>
	</body>

</html>
