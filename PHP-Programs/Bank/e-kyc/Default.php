<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Satyam Yadav - Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<style>
        body {
            width: 100%;
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 20px;
    }

    h2 {
        color: #333;
    }

    ul {
        list-style-type: none;
        padding: 0;
    }

    li {
        margin-bottom: 10px;
    }

    .project {
        border: 1px solid #ccc;
        padding: 15px;
        margin-bottom: 20px;
    }
    button{
          margin-top: 20px;
    }
    .btn{
        width: 40vh;
        border-radius: 40px;
        position: center;
        height: 8vh;
        text-align: center;
        color: white;
    background: url('../logo/background.jpg') no-repeat center/cover;
    }
    button:hover{
        background-color: gray;
    }
</style>

<body>
    <section id="about">
        <div class="container">
            <h2>About NESTEGG Banking</h2>
            <p>NSTEGG Bank provide to open a Quick account</p>
            <br>
            <p>Befour Continue Please read Required documents Carefully</p>
        </div>
    </section>
    <section id="skills">
        <div class="container">
            <h2>Required Documents </h2>
            <ul>
                <li>Passport size Photo</li>
                <li>Signature</li>
                <li>PAN (for income profe)</li>
                <li>ADHAAR CARD (for identity)</li>
                <li>Any Documents for Address prove</li>
            </ul>
            <form name="form" action="Registration.php">
                <button type="submit" class="btn">Countinue >></button>
            </form>
        </div>
</body>

</html>
