<?php
include 'db.php'


?>
    <?php
    $sql = "SELECT * FROM comment";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
 echo '<table class="table">
  <thead >
   <tr>
    <th scope="col">Name</th>
    <th scope="col">comment</th>
   </tr>
  </thead>
  <tbody>';
  while($row = $result->fetch_assoc()){
   echo '<tr>';
    echo '<td>'. $row["y_name"].'</td>';
    echo '<td>'.$row["y_message"].'</td>';
  }
 echo '</tbody>
 </table>';
} else {
  echo "0 Result";
}
?>
