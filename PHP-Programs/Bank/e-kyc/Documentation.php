<?php
include '../PHP/connection.php';
if(!$conn){
      die('Could not Connect MySql Server:'.mysql_error());
    }
    else{
      if(isset($_POST['submit']))
      {   
        $account_type = $_POST['account_type'];
        $income = $_POST['income'];
         $father = $_POST['father'];
         $mother = $_POST['mother'];
         $dob = $_POST['dob'];
         $house = $_POST['house'];
         $villege = $_POST['villege'];
         $district = $_POST['district'];
         $state = $_POST['state'];
         $pin = $_POST['pin'];
         $address = "$house $villege  $district  $state";
        $sql = "UPDATE `e_kyc` SET `CUSTOMER_ACCOUNT_TYPE`='$account_type', `CUSTOMER_FATHER`='$father', `CUSTOMER_MOTHER`='$mother',`CUSTOMER_DOB`='$dob', `CUSTOMER_ADDRESS`='$address', `CUSTOMER_PIN_CODE`='$pin', `CUSTOMER_INCOME`='$income' WHERE `C_ACCOUNT_NO`='1'";
         if (mysqli_query($conn,$sql)) {
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
    margin-left: 20px;
}
.file{
    width: 100vh;
    height: 8vh;
    border-radius: 10px;
}
</style>
<body>
<header class="nav">
    <h2>Documentation Stage</h2>
</header>
    <form method="post" name="form" action="Confirmation.php"></form>
		<div class="body">
            <main>
                <b>All fields are mandatory</b>
                <section class="hero">
                    <p>Enter 10 Digit PAN No:</p>
                    <input name="pan_no" type="text"  class="input"  placeholder="Enter PAN No" maxlength="10" minlength="10" required></input>
                    <br>
                    <p>Enter 12 Digit ADHAAR No:</p>
                    <input name="adhaar no" type="text"  class="input"  placeholder="Enter ADHAAR No" minlength="12" maxlength="12" required></input>
                    <br>
                    <p>Enter 6 Digit ADHAAR OTP:</p>
                    <input type="text"  class="input"  placeholder="OTP" maxlength="6" minlength="6" required></input>
                    <button class="varify" id="login">Varify OTP</button>
                    <br>
                    <p>Uploade Photo:</p>
                    <input name="photo" type="file"  class="file"  placeholder="select photo" required></input>
                    <p>Uploade Signature:</p>
                    <input name="sign" type="file"  class="file"  placeholder="select photo" required></input>
                    <br>
                    <p>Uploade PAN Card(for identity prove):</p>
                    <input name="pan_p" type="File"  class="file"  placeholder="Select" required></input>
                    <p>Uploade Adhar card(for address prove):</p>
                    <input name="adhaar_p" type="File"  class="file"  placeholder="select" required></input>
                    <br>
                    <button class="btn1" id="login">Login</button>
                </section>
            </main>
		</div>
    </form>
</body>

</html>
