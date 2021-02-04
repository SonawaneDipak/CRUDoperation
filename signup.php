
<?php

session_start();
include 'conn.php';


if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $password=$_POST['password'];
    $confirmpass=$_POST['confirmpass'];

    $pass=password_hash($password,PASSWORD_BCRYPT);
    $conpass=password_hash($confirmpass,PASSWORD_BCRYPT);
    $selectquery="select * from contactform where email='$email'";
    $query=mysqli_query($con,$selectquery);
    $fetch=mysqli_num_rows($query);

    if($fetch){
        ?>

            <script>

                alert('mail all ready exits');
            </script>
            <?php
       
    }else{



if($password==$confirmpass){

    $insertquery="insert into contactform(name,email,number,password,confirmpass)values('$name','$email','$number','$pass','$conpass')";
    $inquery=mysqli_query($con,$insertquery);

    if($inquery){
        ?>
<script>
alert('data inserted');
</script>
        <?php

    }else{
        ?>
        <script>
            alert('data not inserted');
        </script>
                        <?php 
    }
}else{
    ?>

    <script>

        alert('both password not match');
    </script>
    <?php
}
    }

    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Contct Form</title>
    <style>

        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
        }

        .link_center{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .link_center span{
            width: 200px;
            margin: 10px;
            border-radius: 10px;
        }
        .fa{
color: white;
margin-right: 5px;
        }

.center{
   
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
}

.center input{
    width: 300px;
}
    </style>
</head>
<body>


    <div class="container">
        <h1 class="text-center">Contact Form</h1>

        <hr class="w-25 m-auto">
        <!-- <div class=" link_center">
            <span class="p-2 bg-primary   "><i class="fa fa-google" aria-hidden="true"></i><a class="text-white " href="">Sign up Via Google</a> </span>
            <span class="p-2 bg-danger  "><i class="fa fa-facebook" aria-hidden="true"></i><a class="text-white" href="">Sign up Via Facebook</a> </span>

            <span class="text-center "><hr class="w-75 "> Or<hr class="w-75"></span>
        </div> -->
        <form action="" method="POST">
            <div class="center">


                <div class="form-group">

                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
       
                </div>
                <div class="form-group">

                    <label for="email">Email</label>
                 <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email">
                </div>
                <div class="form-group">

                    <label for="number">Number</label>
                 <input type="number" class="form-control" name="number" id="number" placeholder="Enter Number">
                </div>

                <div class="form-group">

                    <label for="password">Password</label>
                 <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">

                </div>

                <div class="form-group">

                    <label for="conpassword">Confirm Password</label>
                 <input type="password" class="form-control" name="confirmpass" id="conpassword" placeholder="Enter Confirm Password">
                 
                </div>
       <input type="submit" class="btn btn-primary" name="submit" id="submit">
      <span class="text-center">Have register ? <a href="login.php">Login Here</a></span>        
    </div>
            </form>
    </div>

    
    <!-- jQuery library -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

 <!-- Popper JS -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 
 <!-- Latest compiled JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
 
</body>
</html>