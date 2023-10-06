<?php

require('connection.php');
require('header.php');

if(isset($_POST['submit'])){
    $pname = $_POST['pname'];
    $pcat = $_POST['cat'];
    $pdes = $_POST['des'];
    $pimg_name = $_FILES['img']['name'];
    $pimg_tmpname = $_FILES['img']['tmp_name'];
    $pimg_size = $_FILES['img']['size'];
    //   echo"<pre>";
    // print_r($_FILES);
    // echo"</pre>";
   
    $pinsert = "INSERT INTO `proadd` (`pname`, `pcategory`, `pdescription`, `pimage`) VALUES ('$pname', '$pcat', '$pdes', ' $pimg_name')";
    $result = mysqli_query($connect,$pinsert);
    move_uploaded_file($pimg_tmpname, 'uploadedimg/' . $pimg_name);
    header('location:http://localhost/products/products/fetch.php');
    if(!$result){
        echo "error in query";
    }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h1> ADD your Products</h1>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data"  class="form-group">
   
    <label for="pname"> Name  </label>
    <input type="text" name="pname" class="form-control">
    <label for="cat"> Category  </label>
    <input type="test" name="cat" class="form-control">
    <label for="des"> Description  </label>
    <input type="text" name="des" class="form-control">
    <label for="img"> Image  </label>
    <input type="file" name="img" class="form-control">
    <input type="submit" name="submit" class="btn btn-danger">
</form>
</div>

</body>
</html>