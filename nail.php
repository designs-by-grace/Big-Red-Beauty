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
        <a href="skincare.php">Skincare</a>
        <a href="makeup.php">Make Up</a>
        <a href="nail.php" id="nail">Nail Products</a>
        <a href="appliances.php">Appliances</a>
        <a href="accessories.php">Accessories</a>
      </div>
    </li>
    <li class ="menu1"><a href="promotions.php" class ="menu2">Promotions</a></li>
    <li class ="menu1"><a href="contactus.php" class ="menu2">Contact Us</a></li>
  </ul>
  </nav>

  <h1 class="title">Nail Products</h1>

  <h2 class="subtitle">Nail Polish</h2>
  <div class="gallery">
      <img src="images/orangepop.jpg" alt="polish" width="300" height="300">
    <div class="desc">Ruby Kisses Orange Popsicle</div>
  </div>
  <div class="gallery">
      <img src="images/bubble.jpg" alt="polish" width="300" height="300">
    <div class="desc">Ruby Kisses Bubble Gum</div>
  </div>
  <div class="gallery">
      <img src="images/mint.jpg" alt="polish" width="300" height="300">
    <div class="desc">Ruby Kisses Mint Chocolate Chip</div>
  </div>
  <div class="gallery">
      <img src="images/cotton.jpg" alt="polish" width="300" height="300">
    <div class="desc">Ruby Kisses Cotton Candy</div>
  </div>
  <div class="gallery">
      <img src="images/rknailveil.jpg" alt="polish" width="300" height="300">
    <div class="desc">Ruby Kisses Nail Veil</div>
  </div>
  <div class="gallery">
      <img src="images/rkpeeloffbase.jpg" alt="polish" width="300" height="300">
    <div class="desc">Ruby Kisses Peel Off Base</div>
  </div>
  <div class="gallery">
      <img src="images/rkquickdry.jpg" alt="polish" width="300" height="300">
    <div class="desc">Ruby Kisses Quick Dry Top Coat</div>
  </div>
  <div class="gallery">
      <img src="images/rkmatte.jpg" alt="polish" width="300" height="300">
    <div class="desc">Ruby Kisses Matte Top Coat</div>
  </div>

  <br class="extend3">

  <h2 class="subtitle">Nail Polish Remover</h2>
  <div class="gallery">
      <img src="images/pureacetone.jpg" alt="remover" width="300" height="300">
    <div class="desc">Nail Polish Remover Pure Acetone</div>
  </div>
  <div class="gallery">
      <img src="images/cutexsponge.jpg" alt="remover" width="300" height="300">
    <div class="desc">Cutex Nail Polish Remover Scrub Sponge Non-Acetone</div>
  </div>

  <br class="extend4">

  <h2 class="subtitle">Kits</h2>
  <div class="gallery">
      <img src="images/pedicure.jpg" alt="kits" width="300" height="300">
    <div class="desc">Kiss Pedicure Kit</div>
  </div>

  <?php include ("includes/footer.php"); ?>

</body>
</html>
