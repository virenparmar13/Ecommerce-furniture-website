<?php
$servername = "sql107.unaux.com";
$dBUsername = "unaux_27260874";
$dBPassword = "3l44a0ahg";
$dBName = "unaux_27260874_projectinp";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn) {
    die("connection failed: ".mysqli_connect_error());
}



if(isset($_POST['regi'])){

    require 'dbdata.php';

    $username = $_POST['Uname'];
    $email = $_POST['email'];
    $password = $_POST['psw'];
    $password_repeat = $_POST['conf'];

    if (empty($username) || empty($email) || empty($password) || empty($password_repeat) ) {
        header("Location: ../signup.php?error=emptyfield&uid=".$username."&mail=".$email);
        exit();
    }

    else {
        $sql = "SELECT uidusers FROM users WHERE uidusers=?";
        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultcheck = mysqli_stmt_num_rows($stmt);
            if ($resultcheck > 0) {
                header("Location: ../signup.php?error=usernametaken&mail=".$email);
                exit();
            }

            else {
                $sql = "INSERT INTO users(uidusers,email,pwd) VALUES (?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt,$sql)) {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();

                }
                else{
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

                    $mysqli_stmt_bind_param($stmt, "sss" , $username,$email,$hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }

    }
    mysqli_stmt_close($stmt);
    mysqli_close();
}

else{
    header("Location: ../signup.php");
    exit();
}
