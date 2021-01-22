<?php

$server="localhost";
$username="root";
$pass="";
$db="web";

$con=mysqli_connect($server,$username,$pass,$db);

if($con){
    ?>
    <script>
alert("connection successfull");
    </script>

    <?php
}else{
    ?>
    <script>
    alert("connection not successfull");
    </script>
    <?php
}

?>