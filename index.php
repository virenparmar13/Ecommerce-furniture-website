<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FurniturePoint | TheFurniturePoint.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1200px)" href="css/phone.css">
</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="image/logo.png" alt="TheFurniturePoint.com">
        </div>
        <ul>
            <li class="item"><a href="index.php">Home</a></li>
            <li class="item"><a href="kitchen.php">Kitchen</a></li>
            <li class="item"><a href="livingroom.php">Living Room</a></li>
            <li class="item"><a href="bedroom.php">Bedroom</a></li>
            <li class="item"><a href="office.php">Office Essentials</a></li>
            <li class="item"><a href="aboutUs.php">More</a></li>
            <?php
                session_start();
                if (isset($_SESSION["userUID"])) {
                    echo '<div>
                    <button class="btn" onclick="redirectout()">LOG-OUT</button>
                    </div>';
                }
                else{
                    echo '<div>
                    <button class="btn1" onclick="redirectsign()">Sign up</button>
                    <button class="btn" onclick="redirect()">LOG-IN</button>
                    </div>';
                }
             ?>
            <script>
                function redirect() {
                    window.location.href = "login.php";
                }
                function redirectout() {
                    window.location.href = "logout.php";
                }

                function redirectsign(){
                    window.location.href='signup.php';
                }
            </script>

            


        </ul>
        <div id="login">
            <img src="image/login.png">
        </div>


    </nav>

    <section id="home">
       <h1 class="h-primary"> Welcome to TheFurniturePoint</h1>
       <p>Welcome to the Best Online Furniture Store</p>

    </section>

    <section class="sofabed">
        <h1 class="h-primary center"></h1>
        <div id="sofabed">
            <div class="box">
                <a href="/shoppingcart/livingroom.php">
                <img src="image/sofa.png" alt="">
                </a>
                <h2 class="h-secondary center">Sofa-sets</h2>
            </div>
            <div class="box">
                <a href="/shoppingcart/bedroom.php">
                <img src="image/bed.png" alt="">
                </a>
                <h2 class="h-secondary center">Bed-sets</h2>
            </div>
        </div>
    </section>
    <section class="wardrobedineset">
        <h1 class="h-primary center"></h1>
        <div id="wardrobedineset">
            <div class="box">
                <a href="/shoppingcart/bedroom.php">
                <img src="image/wardrobe.png" alt="">
                </a>
                <h2 class="h-secondary center">Wardrobe</h2>
            </div>
            <div class="box">
                <a href="/shoppingcart/kitchen.php">
                <img src="image/dine.png" alt="">
                </a>
                <h2 class="h-secondary center">Dining-sets</h2>
                
            </div>
        </div>
    </section>
    <hr>
    <section id="ad">
        <h1 class="h-primary center"></h1>
        <div id="ad-box">
            <?php
             echo"<video width='550' height='300' autoplay loop muted>
                   <source src='image/videoad.mp4' type='video/mp4'>
                   <source src='videoad.ogg' type='video/ogg'>
                    Your browser does not support the video tag.
                  </video>";

  
            ?> 


        </div>
    </section>
    <section id="about">
        <h1 class="h-primary center">About Us</h1>
        <div id="about-box">
           <button class="btn2" onclick="window.location.href='aboutUs.php'"> Click here to know more</button> 
           
        </div>
    </section>
    <hr>
    <footer>
        <div class="center">
            Copyright &copy; www.TheFurniturePoint.com All rights reserved

        </div>
    </footer>
</body>
</html>
