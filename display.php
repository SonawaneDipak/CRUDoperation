


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Display</title>

</head>
<body>

<div class="container">
  <h2 class="text-center">List Of Candidates for web Developer job</h2>
            
  <table class="table table-dark table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Password</th>
        <th>confirmpass</th>
      </tr>
    </thead>
    <tbody>
    <?php

include 'conn.php';


$selectquery="select * from practice";

$query=mysqli_query($con,$selectquery);

while ($res=mysqli_fetch_array($query)) {
    ?>
   
    <tr>
      <td><?php echo $res['id']; ?></td>
      <td><?php echo $res['name']; ?></td>
      <td><?php echo $res['number']; ?></td>
      <td><?php echo $res['email']; ?></td>
      <td><?php echo $res['password']; ?></td>
      <td><?php echo $res['confirmpass']; ?></td>
     
      <td><a href="update.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Update"><i class="fa fa-edit"></i></a></td>
      <td><a href="delete.php?id=<?php echo $res['id']; ?>" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a></td>
     
    </tr>
 <?php
}

?>

      
    </tbody>
  </table>

  <button class=" btn bg-primary"><a class="text-white" href="index.php">Back To Home</a></button>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>