<?php
    include 'db.php';

    session_start();
    if(!isset($_SESSION["logedin"])){
        header("location: ../login.php");
    }
  ?>
  <?php
	

	if (isset($_POST['post_comment'])) {

		$email = $_POST['email'];
    $y_number = $_POST['y_number'];
		$y_message = $_POST['y_message'];
		
		$sql = "INSERT INTO contactus (email, y_number,y_message)
		VALUES ('$email','$y_number', '$y_message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>

</body>
</html>
<html>
    <head>
        <title>contactus</title>
        <link rel="stylesheet" href="css/contact.css">
    </head>
    <?php include('shared/navbar.html'); ?>

<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>CONTACT</span>
            <span>US</span>
          </div>
          <div class="app-contact">WE ARE HERE TO HELP YOU</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
            <form action="" method="post" class="form">
              <input class="app-form-control" placeholder="NAME" value=" EASY ENGLISH ">
            </div>
            <div class="app-form-group">
              <input name="email" type="email" class="app-form-control" placeholder="EMAIL" id="email" required>
            </div>
            <div class="app-form-group">
              <input name="y_number" type="" class="app-form-control" placeholder="CONTACT NO" required>
            </div>
            <div class="app-form-group message">
            <textarea name="y_message" cols="20" rows="5" class="app-form-control" placeholder="Message"></textarea>
            </div>
            <div class="app-form-group buttons">
              <!-- <button class="app-form-button">CANCEL</button> -->
              <button type="submit" class="app-form-button" name="post_comment">SEND</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</html>

