<?php
	
	include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/commentstyle.css">
	<title>showcontact</title>
</head>
<body>
<div class="contact">
		<?php

			$sql = "SELECT * FROM contactus";
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		?>
		<h3><?php echo $row['email']; ?>
       <?php echo $row['y_number']; ?>
		<p><?php echo $row['y_message']; ?></p></h3>

		<?php } } ?>
	</div>
</body>
</html>
