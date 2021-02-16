<?php
session_start();
require_once("config.php");
if(!isset($_SESSION["userUID"])){
   header("location: login.php");
}


?>

<HTML>
<HEAD>
<TITLE>Checkout</TITLE>

<link rel="stylesheet" href="css/checkout.css">
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/phone.css">

</HEAD>
<BODY>
    <nav id="navbar">
        <div id="logo">
            <img src="image/logo.png" alt="TheFurniturePoint.com">
        </div>
    </nav>
    <section id="home">
       
       <h1 class="h-primary"> PROCEED TO PAY</h1>
       <p> Secured payment </p>
       <br>
       <button class="btn1" onclick="window.location.href='orderdone.php'">CASH ON DELIVERY</button>
       <br>
       <button class="btn2" onclick="window.location.href='https://www.paypal.com'">PAY USING PAYPAL</button>
    </section>
</body>
</html>