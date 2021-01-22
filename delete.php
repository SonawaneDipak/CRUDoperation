<?php

include 'conn.php';
$id=$_GET['id'];

$delete="delete from practice where id=$id";

$query=mysqli_query($con,$delete);

if($query) {
    # code...
    ?>
 <script>
 alert("Deleted Successfully");
</script>
    <?php
} else {
    ?> 
<script>
alert("Not Deleted Successfully");
</script>
    <?php
    # code...
}


header('location:display.php');
die();


?>