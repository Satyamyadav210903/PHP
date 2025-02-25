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
}
</style>
<body>
<header class="nav">
    <h2>Registration Stage</h2>
</header>
    <form method="post" name="form" action="Personal.php">
		<div class="body">
            <main>
                <b class="b">All fields are mandatory</b>
                <section class="hero">
                    <p>Enter Full Name:</p>
                    <input type="text" name="name" class="input" placeholder="Enter Name" required></input>
                    <br>
                    <p>Enter 10 Digit Phone No:</p>
                    <input type="integer" name="Phone" class="input"  placeholder="Enter Phone no" maxlength="10" minlength="10" required></input>
                    <button class="varify" id="login">send OTP</button>
                    <br>
                    <p>Enter 4 Digit Phone OTP</p>
                    <input type="otp" class="input"  placeholder="OTP" minlength="4" max="4" required></input>
                    <br>
                    <p>Enter Email:</p>
                    <input type="email" name="Email" id="email" class="input"  placeholder="Enter Email" required></input>
                    <button class="varify" id="login">send OTP</button>
                    <br>
                    <p>Enter 4 Digit Email OTP:</p>
                    <input type="otp"  class="input"  placeholder="OTP" maxlength="4" minlength="4" required></input>
                    <br>
                    <p>Set password:</p>
                    <input type="password" name="pass" class="input"  placeholder="Password" required></input>
                    <br>
                    <br>
                    <br>
                    <button name="submit" id="submit">Submit</button>
                </section>
            </main>
		</div>
    </form>
</body>
</html>
