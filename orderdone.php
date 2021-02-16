<?php
session_start();
require_once("config.php");
unset($_SESSION["cart_item"]);

?>
<HTML>
<HEAD>
<TITLE>Thankyou</TITLE>

<link rel="stylesheet" href="css/checkout.css">
<link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/phone.css">

</HEAD>
<BODY>
    <nav id="navbar">
        <div id="logo">
            <img src="image/logo.png" alt="index.php">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
        </ul>    
    </nav>    
    <section id="home">
       <h1 class="h-primary"> ORDER SUCCESSFUL !! </h1>
       <br>
       <p>Thankyou for shopping with us</p>
       <br>
       <h2 class="h-secondary"></h2>
       <br>
       <button class="btn2" onclick="window.location.href='index.php'">Continue Shopping</button>
       
    </section>
</body>
</html>