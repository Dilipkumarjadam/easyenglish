<?php
include 'db.php';
session_start();
if(!$_SESSION["isAdmin"]){
  header('Location: ./index.html');
}

if (isset($_POST["video"])) {
  $image = $_POST['image'];
  $video = $_POST['video'];
  $level = $_POST['level'];
  $title = $_POST['title'];
  $description = $_POST['description'];

  $query = "INSERT INTO `course`(`image`, `video`, `level`, `title`, `description`) VALUES ('$image', '$video', '$level', '$title', '$description')";

    if (mysqli_query($conn, $query)) {
        $error = "Course added successfully";
    } else {
        $error = "Failed to register: " . mysqli_error($conn);
    }
    }
?>

<?php
/*
include('mydb.php');
if (isset($_POST['submit']))
{
        $PName=$_POST['PName'];
        $Rate=$_POST['Rate'];
        $carat = $_POST['carat'];
        $file = $_FILES['fileToUpload'];

        //print_r($file);
        $filename = $file['name'];
        $filepath = $file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror==0)
        {
                $destfile = 'uploaded Images/'.$filename;
                //echo "$destfile";
                move_uploaded_file($filepath, $destfile);
                
                $insertquery = "INSERT INTO admin(PName,Rate,carat,fileToUpload) values('$PName','$Rate','$carat','$destfile') ";

                $query = mysqli_query($conn,$insertquery);

                if ($query)
                 {
                        $_SESSION['status'] = "Inserted.";
                        header("Location:Admin.php");
                } 
                else
                 {
                        $_SESSION['status'] = "Not Inserted.";
                        header("Location:Admin.php");
                }
        }

}
else
{
        echo "No button has been clicked.";
}
/*$img_loc=$_FILES['fileToUpload']['tmp_name'];
        $img_name = $_FILES['fileToUpload']['name'];
        move_uploaded_file($img_loc, "uploaded Images/.$img_name");*/
?>


<html>
    <head>
        <title>ADD COURSES</title>
        <link rel="stylesheet" href="./css/signup.css">
    </head>
    <body>
        <form class="box" method="POST" action="#">
            <div class="container">
                <div class="top-header"></div>
                
                <header>ADD COURSES</header>

            <div class="" >
                <input name="image" type="url" class="input" placeholder="image" id="image" required>
            </div>
            <div class="input-field" >
                <input name="video" type="text" class="input" placeholder="video" id="video" required>
            </div>
            <div class="input-field" >
                <input name="level" type="text" class="input" placeholder="level" id="level" required>
            </div>
            
            <div class="input-field" >
                <input name="title" type="text" class="input" placeholder="title" id="title" required>
            </div>
            <div class="input-field" >
                <input name="description" type="text" class="input" placeholder="description" id="description" required>
            </div>
            <div class="input-field">
                <input  type="submit" class="submit" value="ADD" >
            </div>  
            <?php if (isset($error)) { echo "<p class='error'>".$error."</p>"; } ?>
            <div class="input-field" id="err">
                
            </div>  
        </form>
     </div>
    </body>
</html>