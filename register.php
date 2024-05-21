<?php
include("conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyles.css">
    <link rel="stylesheet" href="register.css">
    <title>Creative Learning | Register </title>

</head>

<body>
    <?php
    include('header.php');
    ?>
    <div class="container">
        <div class="hero-section">
            <div class="register-form">
                <img src="images/logo.png" alt="logo" class="register-logo">
                <br>
                <h2>Register</h2><br>
                <form class="register-formulaire" action="register_process.php" method="post">
                    <label for="username">Username:</label>
                    <input type="text" id="username" name="username" required><br>
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" maxlength="10" required><br>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required><br>
                    <input class="btn-sucsses" type="submit" value="Register"><br>
                    <a href="login.php">login</a>
                </form>
            </div>
        </div>
    </div>


</body>

</html>