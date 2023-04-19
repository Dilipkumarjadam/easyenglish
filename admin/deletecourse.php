<?php
require("../db.php");

if(isset($_POST["id"])){
    $id = $_POST["id"]; 
    $q = "DELETE FROM `cource` WHERE id='$id' ";
    if(mysqli_query($conn, $q)){
        $message = "Cource with ID '$id' is successfully Deleted";
    } else {
        $message = "Failed to Delete Cource with ID '$id' ";
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
        <input name="id" placeholder="Enter  cource ID" />
        <button>Delete</button>
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
				 <th scope="col">Level</th>
				 <th scope="col">Title</th>
				 <th scope="col">Id</th>
				 </tr>
				</thead>
				<tbody>';
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		        echo '<tr>';
				echo '<td>'. $row["level"].'</td>';
				echo '<td>'. $row["title"].'</td>';
				echo '<td>'.$row["id"].'</td>';

			  }
		 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
?>
</div>
	