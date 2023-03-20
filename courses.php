<?php
    include 'db.php';
    session_start();
    if(!$_SESSION["logedin"]){
      header('Location: ./login.php');//hello
    }

    $level = $_GET['level']; 
    $query = "SELECT * FROM `course` WHERE level='$level'";

    $res = mysqli_query($conn, $query);

    echo mysqli_error($conn);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include('shared/navbar.html'); ?>
    <div class="levels" id="course">
        <?php 
            while($row = mysqli_fetch_array($res)){
                $id = $row["id"];
                $img = $row["image"];
                $title = $row["title"];
                $description = $row["description"];?>
                <div class="levels_box">
                    <img src="<?php echo $img ?>" alt="">
                    <div>
                        <h1><?php echo $title ?></h1>
                        <p><?php echo $description ?></p>
                        <div class="btn_wrapper">
                        <a href="singleCource.php?id=<?php echo $id ?>">
                            <button>Start now</button>
                        </a>
                        </div>
                    </div>
                </div>
            <?php
            }?>
</html>
