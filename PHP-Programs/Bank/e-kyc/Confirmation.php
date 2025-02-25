<?php
    include '../PHP/connection.php'; 
    
    if(!$conn){
        die('Could not Connect MySql Server:'.mysql_error());
      }
      else{
        if(isset($_POST['submit']))
        {   
          $Pan_no = $_POST['pan_no'];
          $Adhaar_no = $_POST['adhaar_no'];
           $Photo = $_POST['photo'];
           $Sign = $_POST['sign'];
           $Pan_photo = $_POST['pan_p'];
           $Adhaar_photo = $_POST['adhaar_p'];
           $address = "$house $villege  $district  $state";
          $sql = "UPDATE `e_kyc` SET  `CUSTOMER_PAN_NO`='$Pan_no', `CUSTOMER_ADHAAR_NO`='$Adhaar_no', `CUSTOMER_PHOTO`='$Photo', `CUSTOMER_ADHAAR_PHOTO`='$Adhaar_photo', `CUSTOMER_PAN_PHOTO`='$Pan_photo', `CUSTOMER_SIGN_PHOTO`='$Sign' WHERE `C_ACCOUNT_NO`='1'";
           if (mysqli_query($conn,$sql)) {
              }
        }
           mysqli_close($conn);
     }
  
?>





<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<style>
header{
    margin-top: 0px;
    width: 70%;
    border-radius: 15px;
    height: 10vh;
    position: fixed;
    background-color: goldenrod;
    color: white;
}
h2{
    text-align: center;
    width: 100%;
}
form{
    padding-top: 15vh;
}
</style>
<body>
<header class="nav">
    <h2>Confirmation Stage</h2>
</header>
<form method='POST' action="Acknowledgment.php">           
  <?php
    include '../PHP/connection.php'; 

    $sql = "SELECT * FROM e_kyc";
    if ($result = $conn->query($sql)) {
        while ($row = $result->fetch_assoc()) {
   ?>
<div class="body">
            <main>
                <section class="hero">
                    <p>   <?php
            echo "Name:" . $row['name'] . "<br>";
            echo "Father Name:" . $row['father'] . "<br>";
            echo "Mother Name:" . $row['mother'] . "<br>";
            echo "Phone no:" . $row['phone'] . "<br>";
            echo "Email-ID:" . $row['email'] . "<br>";
            echo "DOB:" . $row['dob'] . "<br>";
            echo "PAN no:" . $row['PAN'] . "<br>";
            echo "ADHAAR NO:" . $row['ADHAAR'] . "<br>";
            echo "Address:" . $row['address'] . "<br>";
            echo "Pin:" . $row['pin'] . "<br>";
        }      
        $result->free();
    }
   ?>
   
   <button name="submit" id="submit">Edit</button>
   <button name="submit" id="submit">Submit</button>
   </p>
                </section>
            </main>
		</div>
</form>
<script src="Assets/js/jquery.js"></script>
<script src="Assets/js/boostrapjs.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.13.3/datatables.min.js"></script>
    </img>
</body>
</html>