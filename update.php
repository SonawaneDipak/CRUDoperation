<?php


include 'conn.php';
$id=$_GET['id'];

  $selectquery="select * from practice where id=$id";
  $query=mysqli_query($con,$selectquery);

  $showdata=mysqli_fetch_array($query);

if(isset($_POST['submit'])){
 
    $id=$_GET['id'];
 
    $name=$_POST['name'];
  $number=$_POST['number'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $confirmpass=$_POST['confirmpass'];

  $encrypt=password_hash($password,PASSWORD_BCRYPT);

  
  $verify=password_verify($password,$encrypt);
  

  
  $insertdata=" update practice set id=$id ,name='$name',number='$number',email='$email',password='$encrypt',confirmpass='$verify' where id=$id";

  $res=mysqli_query($con,$insertdata);
  if($res){
      ?>
    <script>
alert("data inserted ");

    </script>

    <?php
      header('location:display.php');
      die();
}else{
    ?>
    <script>
    alert("data inserted successfull");
    </script>
    <?php
}
 

}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<style>
   .center{
       display: flex;
       flex-direction: column;
       justify-content: center;
       align-items: center;
   }
</style>

    <title>Contact form</title>
</head>
<body>

    <section>
        <div class=" container mt-5">
            <h2 class="text-center"> Cards</h2>
            <hr class="w-25 m-auto">
           
            <div class="center">
            <form method="POST">
                <div class="form-group">

                    <label for="exampleInputText">Name</label>
                  <input type="text" class="form-control" name="name" value="<?php echo $showdata['name'];?>" style="width: 25rem;" id="exampleInputText" aria-describedby="emailHelp" placeholder="Enter text">
                </div>
                <div class="form-group">

                    <label for="exampleInputNumber">Number</label>
                  <input type="number" class="form-control" name="number" value="<?php echo $showdata['number'];?>" style="width: 25rem;" id="exampleInputNumber" aria-describedby="numberHelp" placeholder="Enter number">
                </div>
                <div>
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" value="<?php echo $showdata['email'];?>" style="width: 25rem;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" value="<?php echo $showdata['password'];?>" style="width: 25rem;" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">  Confirm Password</label>
                    <input type="password" class="form-control" value="<?php echo $showdata['confirmpass'];?>"  name="confirmpass" style="width: 25rem;" id="exampleInputPassword1" placeholder="Confirm  Password">
                  </div>
               
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        </div>

    </section>
  
     <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

