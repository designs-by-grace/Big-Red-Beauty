<?php
//$name = $_REQUEST["username"];
//$email = $_REQUEST["email"];
//$submit = $_REQUEST["submit"];

//if (isset($submit)) {
  //error_log("form was submitted");

  //$isEmailEmpty = empty($email);
  //$isEmailAddress = filter_var($email, FILTER_VALIDATE_EMAIL);

  //error_log("email empty?" . ($isEmailEmpty ? 'T':'F'));
  //error_log("email address?" . ($isEmailAddress ? 'T':'F'));

  //$isEmailValid = !$isEmailEmpty && $isEmailAddress;

  //error_log("email valid?" . ($isEmailValid ? 'T':'F'));

  //if ($isEmailValid) {

    //header("Location: action.php");
    //return;
  //}
//} else {
  //error_log("form was not submitted");
//}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Big Red Beauty</title>
  <!--<link rel="stylesheet" type="text/css" href="styles/normalize.css" media="all"/>-->
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
</head>

<body>
  <?php include ("includes/toplogo.php"); ?>

  <nav>
  <ul class ="menubar">
    <li class ="menu1"><a href="index.php" class ="menu2">Home</a></li>
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
    <li class ="menu1"><a href="contactus.php" class ="menu2" id="contact">Contact Us</a></li>
  </ul>
  </nav>

  <h1 class="supertitle">Contact Us</h1>

  <img class="store" alt="store" src="images/storefront.jpg">

  <br/>

  <div class="container">
    <div class="left1">
      <p class="title">To Contact Us Directly</p>
      <p class="info">Daniel Song
        <br/>
        Email: info@bigredbeauty.com
        <br/>
        Phone Number: (631) 392-1210</p>
    </div>
    <div class="right1">
      <p class="title">Store Location & Hours</p>
      <p class="info">  11 Station Drive Wyandanch, NY 11798
        <br/>
        Monday-Friday 9:00am to 7:00pm
        <br/>
        Saturday 10:00am to 6:00pm</p>
    </div>
  </div>

<!--  <br class="extend5"/>

  <p class="title">Join our mailing subscription to be the first to know about new promotions,
    new arrivals, and special discounts! </p>
  <form id="subscription" action="action.php" method="post">
    <div class="subscribe">
     <div id="username">
       <label for="name">Name:</label>
       <input type="text" id="name" name="username"/>
       <span class="error hidden" id="nameError">
         No name provided.
       </span>
     </div>
     <div id="email">
       <label for="mail">Email:</label>
       <input type="email" id="mail" name="email"/>
       <span class="error hidden" id="emailError">
         Invalid or no email address provided.
       </span>
     </div>
     <button type="submit" name="submit" id="submit">Subscribe</button>
  </div>
</form>-->

  <?php include ("includes/footer.php"); ?>

</body>
</html>
