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
        <div class="levels_box">
            <img src="./images/b2.jpg" alt="">
            <div>
                <h1>ARTICLES </h1>
                <p>In this video you will going to learn article by a story of a two friend which also includes windows topic to make it intresting.</p>
                <div class="btn_wrapper">
                <a href="basic1.php">
                     <button>STAGE 1</button>
                </a>
                </div>
            </div>
        </div>
        <div class="levels_box">
            <img src="./images/men.jpg" alt="">
            <div>
                <h1>CONJUCTION</h1>
                <p>In this video you will going to learn vocabulary by just listening daily converstion, between two friends in a very interactive interface. </p>
                <div class="btn_wrapper">
                <a href="basic2.php">
                     <button>STAGE 2</button>
                </a>
                </div>
            </div>
        </div>
        <div class="levels_box">
            <img src="./images/b3.jpg" alt="">
            <div>
                <h1>NOUNS</h1>
                <p>In this video you will going to learn english very fast and efficiently, and even you will be able to speak and listen english more efficiently.</p>
                <div class="btn_wrapper">
                <a href="basic3.php">
                     <button>STAGE 3</button>
                </a>
                </div>
            </div>
        </div>
        <div class="levels_box">
            <img src="./images/b5.jpg" alt="">
            <div>
                <h1>PREPOSITION</h1>
                <p>In this video you will going to learn many things that will help you to improve your conversation and listening.</p>
                <div class="btn_wrapper">
                <a href="basic4.php">
                     <button>STAGE 4</button>
                </a>
                </div>
            </div>
        </div>
        <div class="levels_box">
            <img src="./images/b4.jpg" alt="">
            <div>
                <h1>PRESCRIPTIVE</h1>
                <p>In this video you will going to learn prescriptive grammar by seeing video of sherlock type animated story.</p>
                <div class="btn_wrapper">
                <a href="basic5.php">
                     <button>STAGE 5</button>
                </a>
                </div>
            </div>
        </div>
        <div class="levels_box">
            <img src="./images/b6.webp" alt="">
            <div>
                <h1>DESCRIPTIVE</h1>
                <p>In this video you will going to learn descriptive grammar by seeing the video of a housekeeper and a thief in a animated form.</p>
                <div class="btn_wrapper">
                <a href="basic6.php">
                     <button>STAGE 6</button>
                </a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>