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
    <li class ="menu1"><a href="aboutus.php" class ="menu2">About Us</a></li>
    <li class = "dropmenu">
      <a href="products.php" class="menu3" id="products">Products</a>
      <div class="dropmenu-content">
        <a href="hairproducts.php">Hair Products</a>
        <a href="pieces.php">Hair Pieces</a>
        <a href="wigs.php" id="wigs">Wigs</a>
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

  <h1 class="title">Wigs</h1>

  <h2 class="subtitle">Lace Front Wigs</h2>
  <div class="gallery">
      <img src="images/wig.jpg" alt="wig" width="300" height="300">
    <div class="desc">Lace Front Natural Short Cut Wig</div>
  </div>
  <div class="gallery">
      <img src="images/wavywig.jpg" alt="wig" width="300" height="300">
    <div class="desc">Lace Front Curly Wig</div>
  </div>
  <div class="gallery">
      <img src="images/beachwaveblack.jpg" alt="wig" width="300" height="300">
    <div class="desc">Lace Front Black Beach Waves Wig</div>
  </div>
  <div class="gallery">
      <img src="images/beachwavewig.jpg" alt="wig" width="300" height="300">
    <div class="desc">Lace Front Blond Beach Waves Wig</div>
  </div>

  <?php include ("includes/footer.php"); ?>

</body>
</html>
