<?php
    include("conn.php");
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    
    // Prepare and execute INSERT query to add a new user to the 'users' table
    $stmt = $conn->prepare("INSERT INTO users(username, phone, email,password, role_id) VALUES (?,?,?,?,1)");

    $stmt->bind_param("ssss", $username,$phone,$email, $password);
    
    if ($stmt->execute()) {
        // Registration successful, redirect to login page
        header("Location: login.php");
        exit();
    } else {
        // Handle registration failure
        echo "Registration failed. Please try again.";
    }
}
?>
