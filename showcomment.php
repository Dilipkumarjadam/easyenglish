<?php
	
	include 'db.php';

	if (isset($_POST['post_comment'])) {

		$name = $_POST['name'];
		$message = $_POST['message'];
		
		$sql = "INSERT INTO comment (name, message)
		VALUES ('$name', '$message')";

		if ($conn->query($sql) === TRUE) {
		  echo "";
		} else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/commentstyle.css">
	<title>comments</title>
</head>
<body>
<div class="content">
<h1><?php echo'USERS COMMENTS :'; ?></h1>
		<?php

			$sql = "SELECT * FROM comment";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['name']; ?></h3>
		<p><?php echo $row['message']; ?></p>

		<?php } } ?>
	</div>
</body>
</html>
