<?php

require('connection.php');
require('header.php');
$pid = $_GET['id'];

$per_del = "DELETE from `proadd` where pid = '$pid' ";

$result = mysqli_query($connect, $per_del);
if(!$result){
    echo "query failed";
}else{
    header('location:http://localhost/products/products/trash.php');
}

?>