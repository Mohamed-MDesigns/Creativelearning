<?php
include('conn.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch course data by ID
    $fetch_query = "SELECT * FROM courses WHERE id = $id";
    $result = $conn->query($fetch_query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $name = $row['name'];
        $author = $row['author'];
        $description = $row['description'];
        $stat = $row['stat']; // Add status variable
    } else {
        echo "Course not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="modify_course.css">
    <title>Modify Course</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="images/logo2.png" alt="logo" class="nav-logo">
            <div class="sidebar-links">
                <a href="dashboard.php">Dashboard</a>
                <a href="index.php?admin">Go to website</a>
                <a href="add_course.php">Add Courses</a>
                <a href="course.php">List Courses</a>
                <a href="form.php">Manage Forms</a>
                <a href="dashboard-userstab.php">User Stats</a>
                <a href="index.php">logout</a>
            </div>
        </div>
        <div class="main-content">
            <a href="dashboard.php" class="btn-normal">Back to dashboard</a>
            <h2>Modify Course</h2>

            <form class="course_formulaire" action="modify_course_process.php" method="post">
                <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="name">Course Name:</label><br>
                <input class="form-control" type="text" id="name" name="name" value="<?php echo $name; ?>" required><br><br>

                <label for="author">Author:</label><br>
                <input class="form-control" type="text" id="author" name="author" value="<?php echo $author; ?>"><br><br>

                <!-- Add input field for status -->
                <label for="stat">Status:</label><br>
                <select id="stat" name="stat">
                    <option value="2" <?php if ($stat == 2) echo 'selected'; ?>>Show</option>
                    <option value="1" <?php if ($stat == 1) echo 'selected'; ?>>Hide</option>
                </select><br><br>

                <label for="description">Description:</label><br>
                <textarea class="form-control" id="description" name="description" required><?php echo $description; ?></textarea><br><br>

                <input type="submit" class="btn-normal" id="no-width" value="Submit">
                <a href="course.php" class="">Cancel</a>
            </form>

        </div>
    </div>

</body>

</html>