<?php
include('conn.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record with the given ID
    $delete_query = "DELETE FROM form WHERE Id=?";
    $stmt = $conn->prepare($delete_query);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Record deleted successfully!');</script>";
    } else {
        echo "<script>alert('Error deleting record');</script>";
        echo "Error: " . $stmt->error;
    }

    $stmt->close();

    // Redirect back to the main page
    header("Location: form.php");
    exit();
} else {
    echo "<script>alert('Invalid request');</script>";
}

$conn->close();
?>
