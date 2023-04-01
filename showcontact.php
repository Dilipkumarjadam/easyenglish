<?php
	
	include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/commentstyle.css">
<div class="contact">

		<?php

			$sql = "SELECT * FROM contactus";
			$result = $conn->query($sql);                               
			if ($result->num_rows > 0) {
				echo '<table class="table">
				<thead >
				 <tr>
				 <th scope="col">Gmail</th>
				 <th scope="col">Number</th>
				 <th scope="col">Message</th>
				 </tr>
				</thead>
				<tbody>';
			  // output data of each row
			  while($row = $result->fetch_assoc()) {
			   
		
				echo '<td>'. $row["email"].'</td>';
				echo '<td>'. $row["y_number"].'</td>';
				echo '<td>'.$row["y_message"].'</td>';

			  }
		 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
?>
</div>
	