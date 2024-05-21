<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyles.css">
    <link rel="stylesheet" href="login.css">
    <title>Creative Learning | Login </title>

</head>

<body>
    <?php
    include('header.php')
    ?>
    <?php
    if (isset($_GET["error"])) {
        echo '<p style="font-size: 26px; color:red;font-weight: 600;">Username or Password wrong .</p>';
    }
    ?>
    <div class="container">
        <div class="hero-section">



            <div class="login-form">

                <img src="images/logo.png" alt="logo" class="login-logo">
                <br><h2>Login</h2><br>
                <form class="login-formulaire" action="login_process.php" method="post">
                    <label for="username">Username or Adress email:</label>
                    <input type="text" id="username" name="username" required><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br>
                    <input class="btn-sucsses" type="submit" value="Login"><br>
                    <a href="register.php">Register</a>

                </form>


            </div>



        </div>

        <div class="footer">

        </div>






    </div>



</body>

</html>