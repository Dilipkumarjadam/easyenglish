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
        header('Location: index.php');
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
        <script>
            var a = document.forms["form"]["pass"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}

        </script>
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
                <input name="pass" type="password" class="input" placeholder="Password"  id="pass" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
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