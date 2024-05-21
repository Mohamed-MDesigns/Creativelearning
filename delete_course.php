<?php
include('conn.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the course with the given ID
    $delete_query = "DELETE FROM courses WHERE id=$id";
    if ($conn->query($delete_query) === TRUE) {
        echo "Course deleted successfully!";
    } else {
        echo "Error deleting course: " . $conn->error;
    }

    header("Location: dashboard.php"); // Redirect back to the dashboard after deletion
    exit();
} else {
    echo "Invalid request.";
}

$conn->close();
?>
