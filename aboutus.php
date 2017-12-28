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
    <li class ="menu1"><a href="index.php" class ="menu2">Home</a></li>
    <li class ="menu1"><a href="aboutus.php" class ="menu2" id="about">About Us</a></li>
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

  <h1 class="supertitle">About Us</h1>

  <img class="store1" alt="store" src="images/insidestore.jpg">

  <div class="1">
    <div class="aboutusleft">
      <p class="aboutus">We are the premier Beauty Supply Store in the heart of
        Wyandanch (at the Wyandanch LIRR Station) serving the town of Babylon and
        neighboring towns.
        <br/>
        <br/>
        We are family owned and operated with plenty of experience and can cater to
        all your beauty needs. Our ownership is friendly and knowledgeable with
        all products we sell and will gladly answer any questions you may have.
        <br/>
        <br/>
        Please visit us for an unparalleled shopping experience!</p>
    </div>
    <div class="aboutusright">
      <p class="wecarry">
        We carry:
        <br/>
        <br/>
        <ul class="carry">
          <li class="items">Wigs, hair pieces, and haircare products</li>
          <li class="items">Nails and nail care products</li>
          <li class="items">Makeup and eyelashes</li>
          <li class="items">Skincare Products</li>
          <li class="items">Appliances and grooming tools</li>
          <li class="items">Fashion Accessories</li>
          <li class="items">And much more...</li>
        </ul>
      </p>
    </div>
  </div>

  <br class="extend6"/>

  <div class="aboutusleft1">
    <p class="info">We are here!</p>
    <a href="https://www.google.com/maps/place/Big+Red+Beauty+Supply/@40.7557723,-73.3612707,17z/data=!3m1!4b1!4m5!3m4!1s0x89e82daa24c4fbc9:0x7478049275d5806e!8m2!3d40.7557723!4d-73.359082">
      <img alt="map" src="images/map.jpg"/>
    </a>
  </div>

  <br class="extend7"/>

  <div class="aboutusright">
    <p class="closed">We are closed on the following holidays:
      <ul class="holiday">
        <li class="days">New Years Day</li>
        <li class="days">Memorial Day</li>
        <li class="days">Independence Day</li>
        <li class="days">Labor Day</li>
        <li class="days">Thanksgiving Day</li>
        <li class="days">Christmas Day</li>
      </ul>
    </p>
  </div>

  <?php include ("includes/footer.php"); ?>

</body>
</html>
