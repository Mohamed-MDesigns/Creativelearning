<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $stat = $_POST['stat']; // Get status value from the form

    // Update course data in the database including status
    $update_query = "UPDATE courses SET name=?, author=?, description=?, stat=? WHERE id=?";
    $stmt = $conn->prepare($update_query);
    $stmt->bind_param("ssssi", $name, $author, $description, $stat, $id);

    if ($stmt->execute()) {
        echo '<h1 style="font-family: "Poppins", sans-serif;">Course updated successfully!</h1>
        <br>
        <a href="dashboard.php" class="btn-normal">Back to dashboard</a>
        <a href="course.php" class="btn-normal">Go to course list</a>';
    } else {
        echo "Error updating course: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
