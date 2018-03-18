<?php
   include("config.php");
   // error_reporting(0);
   if(isset($_POST['submit'])) {
      

      $formphone=$_POST['phone'];
      $formpassword=$_POST['pwd'];
      // $sql = "SELECT phone ,password FROM employee WHERE phone=='\"$formphone\"' AND password=='\"$formpassword\"' ";
      $query = "SELECT phone , password FROM employee WHERE phone = '$formphone' AND password = '$formpassword'";
      $result = mysqli_query($conn, $query);
      $row = $result->fetch_assoc();
      $phone=$row['phone'];
      $password=$row['password'];
      

     // echo $phone." ".$password." ".$formphone." ".$formpassword;

      if(!$result)
      {
      	header('Location: http://www.facebook.com/');
         
      }	

      else 
      {
      	session_start();
         $_SESSION['phone']= $formphone;
         header('Location: timetable.php');
      }
   }
   
?>