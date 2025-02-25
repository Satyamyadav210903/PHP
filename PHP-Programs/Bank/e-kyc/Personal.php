<?php
include '../PHP/connection.php';
if(!$conn){
      die('Could not Connect MySql Server:'.mysql_error());
    }
    else{
      if(isset($_POST['submit']))
      {   
         $name = $_POST['name'];
         $mob = $_POST['Phone'];
         $email = $_POST['Email'];
         $password = $_POST['pass'];
         $query = "SELECT * FROM e_kyc WHERE CUSTOMER_EMAIL='$email' ";
         if ($result = $conn->query($query)) {
           if($row = $result->fetch_assoc()) {
            header("location: alert.php");
           }
           else{
        $sql = "INSERT INTO `e_kyc`(`C_ACCOUNT_NO`, `CUSTOMER_ACCOUNT_TYPE`, `CUSTOMER_NAME`, `CUSTOMER_FATHER`, `CUSTOMER_MOTHER`, `CUSTOMER_EMAIL`, `CUSTOMER_PHONE`, `CUSTOMER_DOB`, `CUSTOMER_ADDRESS`, `CUSTOMER_PIN_CODE`, `CUSTOMER_INCOME`, `CUSTOMER_PAN_NO`, `CUSTOMER_ADHAAR_NO`, `CUSTOMER_PHOTO`, `CUSTOMER_ADHAAR_PHOTO`, `CUSTOMER_PAN_PHOTO`, `CUSTOMER_SIGN_PHOTO`, `CUSTOMER_PASSWORD`, `status`) 
        VALUES ('','','$name','','','$email','$mob','','','','','','','','','','','$password','')";
         if (mysqli_query($conn,$sql)) {
            }
      }
      }
   }
         mysqli_close($conn);
   }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banking</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="../CSS/form.css">
</head>
<style>
    body{
      padding: 10vh;
    }
    select{
      width: 100vh;
      height: 8vh;
      border-radius: 14px;
    }
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
</style>
<body>
<header class="nav">
    <h2>Personal Stage</h2>
</header>
    <form method="post" name="form" action="Documentation.php">
		<div class="body">
            <main>
                <b class="b">All fields are mandatory</b>
                <section class="hero">
                    <p>Fathers Name:</p>
                    <input type="text" name="father" class="input" placeholder="Father Name" required></input>
                    <br>
                    <p>Mother Name:</p>
                    <input type="text" name="mother" class="input" placeholder="Mother Name" required></input>
                    <br>
                    <p>DOB:</p>
                    <input type="date" name="dob" class="input"  placeholder="Enter DOB" required></input>
                    <br>
                    <br>
                    <b class="b">Full Address</b>
                    <p>House/Building/Appartment:</p>
                    <input type="text" name="house" class="input" placeholder="House/Building/Appartment" required></input>
                    <br>
                    <p>Village and Post/Sub-district:</p>
                    <input type="text" name="villege" class="input" placeholder="Distict/City" required></input>
                    <br>
                    <p>Distric/City:</p>
                    <input type="text" name="district" class="input" placeholder="Distict/City" required></input>
                    <br>
                    <p>State:</p>
                    <input type="text" name="state" class="input" placeholder="State" required></input>
                    <br>
                    <p>Pin code:</p>
                    <input type="text" name="pin" class="input" placeholder="Pin code" required maxlength="6" minlength="6"></input>
                    <br>
                    <p>Account type:</p>
                    <select name="account_type"><option name="account_type" value="Current Account">Current Account</option><option name="account_type" value="Seving Account">Seving Account</option></select>
                    <br>
                    <p>Anual Income:</p>
                    <select name="income"><option name="income" value="less than 2Lac">less than 2Lac</option><option name="income" value="2Lac to 5Lac"> 2Lac to 5Lac</option><option name="income" value="More than 5 Lac">More than 5 Lac<option></select>
                    <br>
                    <button class="btn1" id="submit" name="submit">Submit</button>
                </section>
            </main>
		</div>
    </form>
</body>

</html>
