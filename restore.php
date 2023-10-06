<?php
require('connection.php');

$pid = $_GET['id'];

$restoreimg = "UPDATE  `proadd` SET pstatus = '1' where pid = '$pid' ";
$result = mysqli_query($connect, $restoreimg);
if($result){
    
    header('location:http://localhost/products/products/fetch.php');
}else{
    echo "query failed";
}
?>
