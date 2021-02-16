<?php
    session_start();

    $db = mysqli_connect("localhost", "root", "", "test");
    if (isset($_POST['regi'])) {
        $username = ($_POST['Uname']);
        $email = ($_POST['email']);
        $address = ($_POST['address']);
        $password = ($_POST['psw']);
        $password2 = ($_POST['conf']);
        if ($password == $password2) {
            $password = md5($password);
            $sql = "INSERT INTO users(uidusers , email, pwd, addr) VALUES ('$username', '$email', '$password', '$address')";
            mysqli_query($db , $sql);
            header("location: index.php");
        }
        else{
            header("location: ../signup.php?error=passwordcheckuid=".$username."&mail"/$email);
            exit();
        }

    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log In/Sign Up</title>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body class="full">
    <script type="text/javascript" src="js/valiSignUP.js">

    </script>
    <div class="bg">

        <form action="signup.php" method="post">
            <div class="container">

                <input type="text" placeholder="Enter Username" name="Uname" required><br>

                <input type="text" placeholder="First Name" name="lname" id="fname" required>

                <input type="text" placeholder="Last Name" name="uname" id="lname" required><br>

                <input type="number" placeholder="Enter mobile" name="num" required><br>

                <input type="text" placeholder="Enter email" name="email" required><br>
                <input type="text" placeholder="Enter address" name="address" required><br>

                <input type="password" placeholder="Enter Password" id="psw" name="psw" onkeyup="checkPassword(this.value)" required>
                <span id="pst"></span>

                <input type="password" placeholder="Confirm Password " id="conf" name="conf" required>
                <br>

                <label>
                <input type="checkbox"  name="terms" required>I Accept the Terms of Use & Privacy Policy
                </label>
            </div>

            <div class="container" style="background-color:#6666ff">
                <button type="button" class="cancelbtn" onclick="window.location.href='index.php'">Cancel</button>
                <button type="submit" id="regi" name="regi" onclick="return confirm()" >REGISTER</button>
            </div>
            <div class="container" style="background-color: black">
                <label for="login" style="color:white">Already have a Account?</label>
                <button id="login" onclick="window.location.href='login.php'">LOG IN</button>
            </div>
        </form>
    </div>
</body>
</html>
