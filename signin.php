<?php
include 'db.php';

if (isset($_POST["email"])) {
    $email = $_POST["email"];
    $pass = $_POST['pass'];
    $query = "SELECT * from users where email='$email' AND pass='$pass' limit 1";
    $ress = mysqli_query($conn, $query);

        if (mysqli_num_rows($ress)) {
            session_start();
            $_SESSION["logedin"] = true;

            while($row = mysqli_fetch_array($ress)){
                $_SESSION["isAdmin"] = $row["isAdmin"];
                $_SESSION["name"] = $row["name"];
                $_SESSION["email"] = $row["email"];
                $_SESSION["userid"] = $row["id"];
            } 

            if($_SESSION["isAdmin"]){
                header('Location: admin/adminhome.php');
            } else {
                header('Location: index.php');
            }
    
            exit();
        } else {
            $error = "Username and password dosent matched";
        }
}
?>
<html>
<head>
    <title>LOGIN</title>
    <link rel="stylesheet" href="css/login.css">
    <style>
        <?php include "style.css" ?>
    </style>
</head>

<body>
    <form class="box" method="POST" action="#">
        <div class="container">
            <div class="top-header"></div>
            <span></span>
            <header>Login</header>

            <div class="input-field">
                <input name="email" type="email" class="input" placeholder="Email" required>
            </div>
            <div class="input-field">
                <input name="pass" type="password" class="input" placeholder="password" required>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" value="Login">
            </div>
            <?php if (isset($error)) { echo "<p class='error'>".$error."</p>"; } ?>
            <div class="right">
                <p>Not have an account ? <a href="signup.php">Sign Up Here</a></p>
            </div>
        </div>
    </form>
</body>
</html>