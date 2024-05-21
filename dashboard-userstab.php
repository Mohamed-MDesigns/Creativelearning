<?php
    include("conn.php") ;

    $nubusers = "SELECT * FROM `users` ORDER BY id DESC LIMIT 1;";

    $resualt = mysqli_query($conn,$nubusers) ;

    if($resualt){
        while($row = mysqli_fetch_array($resualt)){
            ?>
            <p><?php echo $row['id'];?> Users</p>
            <?php
        };
    }
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Check if the user
    $check_user = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($conn , $check_user);
    if ($result->num_rows > 0) {
        // Update the user to admin
        $update_query = "UPDATE users SET role_id = 2 WHERE username = '$username'";
        if ($conn->query($update_query) === TRUE) {
            echo "User role updated successfully";
        } else {
            echo "Error updating user role: " . $conn->error;
        }
    } else {
        echo "Error: User not found";
    }
}
?>