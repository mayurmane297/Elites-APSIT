<?php
session_start();
error_reporting(0);
   include("config.php");
   include("validate.php");
   $user=$_SESSION['phone'];
    $sql = "SELECT * FROM employee WHERE phone='".$user."'";
    $result = mysqli_query($conn,$sql);
    $row = $result->fetch_assoc();
        $phone=$row['phone'];

    $department=$row['department'];
    $email=$row['email'];
    $firstname=$row['firstname'];
    $lastname=$row['lastname'];
    $leaves=$row['leaves'];
 
?>
