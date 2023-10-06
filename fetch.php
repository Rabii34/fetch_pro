<?php

require('connection.php');
require('header.php');

$fetching_data ="SELECT * from `proadd` where pstatus = '1'";
$res = mysqli_query($connect,$fetching_data);
if($res){
    if(mysqli_num_rows($res) > 0){

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
      <th scope="col">Update</th>
      <th scope="col">Trash</th>
    </tr>
  </thead>
  <tbody>
    <?php
    while($row = mysqli_fetch_assoc($res)){
    ?>
    <tr>
      <th scope="row"><?php echo $row['pid'] ?></th>
      <td><?php echo $row['pname'] ?></td>
      <td><?php echo $row['pcategory'] ?></td>
      <td><?php echo $row['pdescription'] ?></td>
      <td><img src="<?php echo 'uploadedimg/' . $row['pimage']; ?>" alt="" height="50px" width="50px"></td>
      <td><a href="update.php?id=<?php echo $row['pid'];  ?>" class="btn btn-warning">Update</a></td>
      <td><a href="delimg.php?id=<?php echo $row['pid'];  ?>" class="btn btn-success">Trash</a></td>
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