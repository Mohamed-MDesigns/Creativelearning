<?php
    include('conn.php');
    $the_var = 0 ;
    if(isset($_GET["user"])){
        ?><header class="nav-header">
        <img src="images/logo.png" alt="logo" class="nav-logo">
        <nav>
            <ul class="nav__links">
                <li> <a href="index.php?user">Home</a> </li>
                <li> <a href="user-courses.php?user">Courses</a> </li>
                <li> <a href="aboutus.php?user">About us</a> </li>
                <li> <a href="contact.php">Contact</a> </li>
            </ul>
        </nav>
        <a href="index.php" class="nav-cta">Sign out</a>
        </header>
        <?php
    }else if(isset($_GET["admin"])){
        ?><header class="nav-header">
        <img src="images/logo.png" alt="logo" class="nav-logo">
        <nav>
            <ul class="nav__links">
                <li> <a href="index.php?admin">Home</a> </li>
                <li> <a href="user-courses.php?admin">Courses</a> </li>
                <li> <a href="aboutus.php?admin">About us</a> </li>
                <li> <a href="contact.php">Contact</a> </li>
                <li> <a href="dashboard.php">Dashboard</a></li>
            </ul>
        </nav>
        <a href="index.php" class="nav-cta">Sign out</a>
        </header>
        <?php
    }
    else if(empty($the_var)){
        ?><header class="nav-header">
        <img src="images/logo.png" alt="logo" class="nav-logo">
        <nav>
            <ul class="nav__links">
                <li> <a href="index.php">Home</a> </li>
                <li> <a href="user-courses.php">Courses</a> </li>
                <li> <a href="aboutus.php">About us</a> </li>
                <li> <a href="contact.php">Contact</a> </li>
            </ul>
        </nav>
        <a href="login.php" class="nav-cta">Login</a>
        </header>
        <?php
    }
    
?>