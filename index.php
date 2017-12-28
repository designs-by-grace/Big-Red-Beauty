<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Big Red Beauty</title>
  <!--<link rel="stylesheet" type="text/css" href="styles/normalize.css" media="all"/>-->
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
</head>

<body>
  <?php include ("includes/toplogo.php"); ?>

  <nav>
  <ul class ="menubar">
    <li class ="menu1"><a href="index.php" class ="menu2" id="home">Home</a></li>
    <li class ="menu1"><a href="aboutus.php" class ="menu2">About Us</a></li>
    <li class = "dropmenu">
      <a href="products.php" class="menu3">Products</a>
      <div class="dropmenu-content">
        <a href="hairproducts.php">Hair Products</a>
        <a href="pieces.php">Hair Pieces</a>
        <a href="wigs.php">Wigs</a>
        <a href="skincare.php">Skincare</a>
        <a href="makeup.php">Make Up</a>
        <a href="nail.php">Nail Products</a>
        <a href="appliances.php">Appliances</a>
        <a href="accessories.php">Accessories</a>
      </div>
    </li>
    <li class ="menu1"><a href="promotions.php" class ="menu2">Promotions</a></li>
    <li class ="menu1"><a href="contactus.php" class ="menu2">Contact Us</a></li>
  </ul>
  </nav>

  <p class="under">Hello and welcome to Big Red Beauty Supply's website! As you go through the site,
   you will notice that many of our products are not uploaded on their respective pages. We are a new
   establishment, therefore we will update the website as our store grows!
   <br/>
   We will announce on our social media platforms when our website is fully functional.
   <br/>
   Thank you for your support and patience!</p>

  <h1 class="title">Featured Brands</h1>
  <div class="brand">
    <img alt="Featured Brands" src="images/collage.jpg"/>
  </div>

  <a href="newarrivals.php" id="left">New Arrivals</a>
  <a href="popular.php" id="right">Popular Items</a>

  <br class="extend"/>

  <hr>

  <br class="extend2"/>

  <div class="container">
    <div class="left1">
      <p class="title">Store Location & Hours</p>
      <p class="info">  11 Station Drive Wyandanch, NY 11798
        <br/>
        Monday-Friday 9:00am to 7:00pm
        <br/>
        Saturday 10:00am to 6:00pm</p>
    </div>
    <div class="right1">
      <p class="title">Discover</p>
      <p class="info">Follow us on social media!</p>
        <div class="facebook">
          <a href="https://www.facebook.com/bigredbeauty/">
            <img alt="Facebook" src="images/facebook.png"/>
          </a>
        </div>
        <div class="instagram">
          <a href="https://www.instagram.com/bigredbeauty/">
            <img alt="Instagram" src="images/instagram.png"/>
          </a>
        </div>
    </div>
  </div>

  <?php include ("includes/footer.php"); ?>

</body>
</html>
