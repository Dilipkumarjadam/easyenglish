<?php
require("../db.php");

if(isset($_POST["id"])){
    $id = $_POST["id"]; 
    $q = "DELETE FROM `course` WHERE id='$id' ";
    if(mysqli_query($conn, $q)){
        $message = "Cource with ID '$id' is successfully Deleted";
    } else {
        $message = "Failed to Delete Course with ID '$id' ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        <input name="id" placeholder="Enter course ID" />
        <button class="glyphicon glyphicon-trash" aria-hidden="true">DELETE</button>
    </form>
    <?php if(isset($message)) {echo $message;} ?>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="../css/commentstyle.css">
<div class="contact">

		<?php

			$sql = "SELECT * FROM course";
			$result = $conn->query($sql);                               
			if ($result->num_rows > 0) {
				echo '<table class="table">
				<thead >
				 <tr>
				 <th scope="col">ID</th>
				 <th scope="col">LEVEL</th>
				 <th scope="col">TITLE</th>
				 <th scope="col">VIDEO</th>
				 <th scope="col">DESCRIPTION</th>
				 <th scope="col">ACTION</th>
				 </tr>
				</thead>
				<tbody>';
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		        echo '<tr>';
				echo '<td>'.$row["id"].'</td>';
				echo '<td>'. $row["level"].'</td>';
				echo '<td>'. $row["title"].'</td>';
				echo '<td>'.$row["video"].'</td>';
				echo '<td>'.$row["description"].'</td>';
				echo '<td>';
				echo '<form action="update.php" method="POST">';
				echo '<input type="hidden" name="id" value='.$row["id"].'><button type="submit" class="" name="edit" value="Edit">EDIT<button>';
				echo '</form>';
				echo '</td>';
				echo '</tr>';
			  }
		 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
?>
</div>
	