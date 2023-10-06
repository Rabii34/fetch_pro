<?php
require('connection.php');



$pid = $_POST['id'];
$pname = $_POST['pname'];
$pcat = $_POST['cat'];
$pdes = $_POST['des'];
$pimg = $_FILES['img'];



$updatequery = "UPDATE `proadd` set pid = '$pid',  pname = '$pname', pcategory = '$pcat', pdescription = '$pdes', pimage = '$pimg' where pid = '$pid'";

$result = mysqli_query($connect, $updatequery);
if(!$result){
    die("query failed");
}

header('location:http://localhost/products/products/fetch.php');


?>