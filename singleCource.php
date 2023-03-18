<?php
    include 'db.php';

    session_start();
    if(!$_SESSION["logedin"]){
      header('Location: ./login.php');
    }
    
    $id = $_GET['id']; 
    $query = "SELECT * FROM `course` WHERE id='$id' LIMIT 1";

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
    <div class="levels" id="course">
        <?php
            while($row = mysqli_fetch_array($res)){
                $video = $row["video"];
                $title = $row["title"];
                $description = $row["description"];?>

            <div class="levels_box_vid">
                <iframe width="975" height="560" src="https://www.youtube.com/embed/<?php echo  $video?>" title="<?php echo  $title?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <div>
                    <h1><?php echo  $title?></h1>
                    <p><?php echo  $title?></p>
                    <div>
                        <a href="images/article.pdf"><button>Download pdf NOW!</button></a>
                    </div>
                </div>
            
            </div>
        <?php
        }?>
       
    </div>
</body>
</html>