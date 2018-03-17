<?php
   include("config.php");
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $sql = "SELECT phone,password FROM employee ";
      $result = mysqli_query($conn,$sql);
      $row = $result->fetch_assoc();
      $phone=$row['phone'];
      $password=$row['password'];
      $formphone=$_POST['phone'];
      $formpassword=$_POST['pwd'];

     // echo $phone." ".$password." ".$formphone." ".$formpassword;

      if($formphone==$phone && $formpassword==$password)
      {
      	header('Location: http://www.google.com/');
      }	

      else 
      {
      	header('Location: http://www.facebook.com/');
      }
   }
   else
      echo 'kuch bhi';
?>