<?php
require("../db.php");
?>


<link rel="stylesheet" href="../css/commentstyle.css">
<div class="content_uc">
    <h1>UPDATE COURSE</h1>
    <?php  
      if(isset($_REQUEST['edit'])){
        $sql = "SELECT  * FROM course WHERE id = {$_REQUEST['id']}";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
      }
      if(isset($_REQUEST['update'])){
        if(($_REQUEST['id'] == "") || ($_REQUEST['level']== "") || ($_REQUEST['title']== "") || ($_REQUEST['video']== "") || ($_REQUEST['description']== "")){
            $msg = '<div>Please Fill all Fields</div>';
        } else{
            $rid = $_POST['id'];
            $rlevel = $_POST['level'];
            $rtitle = $_POST['title'];
            $rvideo = $_POST['video'];
            $rdescription = $_REQUEST['description'];
            // $sql = "UPDATE course SET id = '$rid',rlevel = '$level',rtitle = '$title',rvideo = '$video',rdescription = '$description'";
            $sql = "UPDATE course SET level = '$rlevel', title = '$rtitle', video = '$rvideo', description = '$rdescription' WHERE id = '$rid'";

            if($conn->query($sql) == TRUE){
                $msg = '<div>Updated Successfully</div>';
            } else {
                $msg = '<div>Unable To Update</div>';
            }
        }
        echo mysqli_error($conn);
    }
    ?>
    <form action="" method="POST">
    <div class="contact">
        <label for="id"> ID</label> 
        <input type="text" class="contact" name="id" id="id" value="<?php if(isset($row['id']))
        { echo $row['id'];} ?>" readonly>
    </div>
    <div class="contact">
        <label for="level"> LEVEL</label> 
        <input type="text" class="contact" name="level" id="level" value="<?php if(isset($row['level']))
        { echo $row['level'];} ?>" >
    </div>
    <div class="contact">
        <label for="title"> TITLE</label> 
        <input type="text" class="contact" name="title" id="title" value="<?php if(isset($row['title']))
        { echo $row['title'];} ?>" >
    </div>
    <div class="contact">
        <label for="video"> VIDEO</label> 
        <input type="text" class="contact" name="video" id="video" value="<?php if(isset($row['video']))
        { echo $row['video'];} ?>" >
        <div class="contact">
        <label for="description"> DESCRIPTION</label> 
        <input type="text" class="contact" name="description" id="description" value="<?php if(isset($row['description']))
        { echo $row['description'];} ?>" >
    </div>
    <br>
    <div class="butt">
        <button type="submit" class="" id="update" name="update">UPDATE<button>
            <a href="adminhome.php">CLOSE</a> 
        
    </div>
    <?php if(isset($msg)) {echo $msg;} ?>
    </form>       
</div>

