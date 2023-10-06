<?php

require('connection.php');
require('header.php');

$fetching_data ="SELECT * from `proadd` where pstatus = '0'";
$result = mysqli_query($connect,$fetching_data);
if($result){
    if(mysqli_num_rows($result) > 0){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Restore</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = mysqli_fetch_assoc($result)){
    ?>
    <tr>
      <th scope="row"><?php echo $row['pid'] ?></th>
      <td><?php echo $row['pname'] ?></td>
      <td><?php echo $row['pcategory'] ?></td>
      <td><?php echo $row['pdescription'] ?></td>
      <td><img src="<?php echo 'uploadedimg/' . $row['pimage']; ?>" alt="" height="50px" width="50px"></td>
      <td><a href="restore.php?id=<?php echo $row['pid'];  ?>" class="btn btn-primary">Restore</a></td>
      <td><a href="permanentdel.php?id=<?php echo $row['pid'];  ?>" class="btn btn-danger">Delete</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>

<?php
}
}
?>
    
</body>
</html>