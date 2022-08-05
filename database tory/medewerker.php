<?php

include 'config.php';

$db = $conn;
$tableName = "medewerkers";
$columns = ['id', 'full_name', 'email', 'password', 'admin'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
  if(empty($db)){
    $msg = "Database connectie error";
  } elseif (empty($columns) || !is_array($columns)) {
    $msg = "Columns name must be defined in an indexed array";
  } elseif (empty($tableName)) {
    $msg = "Tabel naam is leeg";

  } else {

    $columnName = implode(", ", $columns);
    $query = "SELECT " . $columnName . " FROM $tableName" . " ORDER BY id DESC";
    $result - $db->query($query);

    if($result == true) {
      if ($result->num_rows > 0) {
        $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
        $msg = $row;
      } else {
        $msg = "Data niet gevonden.";
      }
    } else {
      $msg = mysqli_error($db);
    }

  }
  return $msg;
}
?>

<!--<table class="table table-bordered">
   <thead><tr><th>S.N</th>
     <th>User ID</th>
     <th>Full Name</th>
     <th>Email</th>
     <th>Password</th>
     <th>Admin</th>
</thead>
<tbody>
<?php
  if(is_array($fetchData)){
  $sn=1;
  foreach($fetchData as $data){
?>
  <tr>
  <td><?php echo $sn; ?></td>
  <td><?php echo $data['id']??''; ?></td>
  <td><?php echo $data['full_name']??''; ?></td>
  <td><?php echo $data['email']??''; ?></td>
  <td><?php echo $data['password']??''; ?></td>
  <td><?php echo $data['admin']??''; ?></td>
 </tr>
 <?php
  $sn++;}}else{ ?>
  <tr>
    <td colspan="8">
<?php echo $fetchData; ?>
</td>
<tr>
<?php
}?>
</tbody>
 </table>
-->
