<?php
require('connection.php');

  $pid = $_GET['id'];

$deleteimg = "UPDATE `proadd` SET pstatus = '0'  where pid = '$pid'";

$result = mysqli_query($connect, $deleteimg);
if(!$result){
  echo("query failed");
}
header('location:http://localhost/products/products/fetch.php');

?>