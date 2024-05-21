<?php
include("conn.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username_or_email = $_POST['username'];
    $password = $_POST['password'];
    
    // Fetch user data from the database by username
    $stmt = $conn->prepare("SELECT id, username, email, password, role_id FROM users WHERE username = ?");
    $stmt->bind_param("s", $username_or_email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();
    
    // If no user found by username, try fetching by email
    if (!$user) {
        $stmt = $conn->prepare("SELECT id, username, email, password, role_id FROM users WHERE email = ?");
        $stmt->bind_param("s", $username_or_email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
    }
    
    if ($user && password_verify($password, $user['password'])) {
        // Valid login, set session variables
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = ($user['role_id'] == 1) ? 'user' : 'admin'; // Assuming 'admin' role_id is 2
        
        // Redirect based on role after successful login
        if ($_SESSION['role'] === 'admin') {
            header("Location: dashboard.php?admin");
        } else {
            header("Location: index.php?user");
        }
        exit();
    } else {
        // Invalid login, redirect back to login page with error message
        header("Location: login.php?error=1");
        exit();
    }
}
?>
