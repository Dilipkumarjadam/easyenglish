<?php
include 'db.php';

if (isset($_POST["name"])) {
    echo "hello";
  $name = $_POST['name'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  echo $name, $email, $pass;

  $query = "INSERT INTO users (`name`, `email`, `pass`) VALUES ('$name','$email','$pass')";

    if (mysqli_query($conn, $query)) {
        header('Location: index.html');
        exit();
    } else {
        $error = "Failed to register: " . mysqli_error($conn);
    }
    }
?>

<html>
    <head>
        <title>SIGNUP</title>
        <link rel="stylesheet" href="./css/signup.css">
    </head>
    <body>
        <form class="box" method="POST" action="#">
            <div class="container">
                <div class="top-header"></div>
                <span>CREATE ACCOUNT</span>
                <header>SIGN-UP</header>

            <div class="input-field" >
                <input name="name" type="text" class="input" placeholder="Name" id="name" required>
            </div>
            <div class="input-field">
                <input name="email" type="email" class="input" placeholder="Email"  id="email" required>
            </div>
            <div class="input-field">
                <input name="pass" type="password" class="input" placeholder="Password"  id="pass" required>
            </div>
            <div class="input-field">
                <input  type="submit" class="submit" value="Sign up" >
            </div>  
            <div class="input-field" id="err">
                
            </div>  
        </form>
     </div>
    </body>
</html>