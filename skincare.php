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
        <a href="wigs.php">Wigs</a>
        <a href="skincare.php" id="skincare">Skincare</a>
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

  <h1 class="title">Skincare</h1>

  <h2 class="subtitle">Masks</h2>
  <div class="gallery">
      <img src="images/aztecclay.jpg" alt="mask" width="300" height="300">
    <div class="desc">Aztec Secret Indian Healing Clay</div>
  </div>
  <div class="gallery">
      <img src="images/pilaten.jpg" alt="mask" width="300" height="300">
    <div class="desc">Pil'aten Black Charcoal Suction Mask</div>
  </div>

  <br class="extend4">

  <h2 class="subtitle">Hand & Body Lotions</h2>
  <div class="gallery">
      <img src="images/codigreen.jpg" alt="lotion" width="300" height="300">
    <div class="desc">Codi Hand & Body Lotion: Green Tea</div>
  </div>
  <div class="gallery">
      <img src="images/codilavender.jpg" alt="lotion" width="300" height="300">
    <div class="desc">Codi Hand & Body Lotion: Lavender</div>
  </div>
  <div class="gallery">
      <img src="images/codiolive.jpg" alt="lotion" width="300" height="300">
    <div class="desc">Codi Hand & Body Lotion: Olive</div>
  </div>
  <div class="gallery">
      <img src="images/codipom.jpg" alt="lotion" width="300" height="300">
    <div class="desc">Codi Hand & Body Lotion: Pomegranate</div>
  </div>

  <?php include ("includes/footer.php"); ?>

</body>
</html>
