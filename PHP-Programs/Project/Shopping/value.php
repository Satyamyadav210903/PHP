<?php
include 'c_conn.php';
if(!$conn){
      die('Could not Connect MySql Server:'.mysql_error());
    }
    else{
      if(isset($_POST['submit']))
      {   
         $name = $_POST['c_name'];
         $address = $_POST['c_address'];
         $mob = $_POST['c_mob'];
         $email = $_POST['c_email'];
         $password = $_POST['c_password'];
         $query = "SELECT * FROM customer WHERE C_EMAIL='$email'";
         if ($result = $conn->query($query)) {
           if($row = $result->fetch_assoc()) {
            header("location: registration.php");
           }
           else{
        $sql = "INSERT INTO customer (C_NAME,C_MOB,C_EMAIL,C_PASSWORD,C_ADDRESS)
         VALUES ('$name','$mob','$email','$password','$address')";
         if (mysqli_query($conn,$sql)) {
            header('location: login.php');
            }
      }
      }
   }
         mysqli_close($conn);
   }
?>
