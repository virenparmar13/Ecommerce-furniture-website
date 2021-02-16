<?php
    session_start();

    $db = mysqli_connect("localhost", "root", "", "test");

    if (isset($_POST['uname'])) {
        $username = ($_POST['uname']);
        $password = ($_POST['pass']);
        $userId = ($_POST);
        $message ="";
        $sql = "SELECT * FROM users WHERE uidusers = '".$_POST['uname']."' and pwd = '".md5($_POST['pass'])."'";
        $result = mysqli_query($db,$sql);
        $row  = mysqli_fetch_array($result);

        if(is_array($row)) {
            $_SESSION['userID']= $row['idusers'];
            $_SESSION['userUID']= $row['uidusers'];
        }
        else {
            echo '<script>alert("INVALID USERNAME OR PASSWORD")</script>';
        }
        if(isset($_SESSION["userID"])) {
        header("Location:index.php");
        }

        }


?>





<!DOCTYPE html>
<html>
<head>
    <title>Log In/Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body class="full">
        <script type="text/javascript"  src="js/validation.js">

        </script>
    <div class="back">

        <form action="login.php" name="signin"  method="post">

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

                <label for="pass"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="pass" name="pass" required>

                <button type="submit" id="logbut" onclick="return loginCheck()">Login</button>
                <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
            </div>

            <div class="container" style="background-color:#6666ff">
                <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Cancel</button>
                <span class="psw"><a href="#" color="black">Forget password?</a></span>
            </div>

            <div class="container" style="background-color:black">
                <label for="signup" style="color:white">Do Not Have a Account?</label>
                <button id="signup" onclick="window.location.href='signup.php'">SIGN UP</button>
            </div>
        </form>
    </div>


</body>
</html>
