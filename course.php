<?php
include('conn.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="course.css">
    <title>Creative Learning | Courses </title>
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
            <div class="courses-links">
                <a href="dashboard.php" class="btn-normal1">Back to dashboard</a>
            </div>
            <div class="page-title">
                <h2>Courses</h2>
            </div>
            <div class="add-course">
                <a href="add_course.php" class="btn-normal1">Add course</a>
            </div>
            <div class="courses-cards">
                <?php
                // Include database connection
                include('conn.php');

                // Fetch courses from the database
                $fetch_query = "SELECT * FROM courses";
                $result = $conn->query($fetch_query);

                if ($result->num_rows > 0) {
                    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>

                        <section>
                            <div class="cards">
                                <div class="card">
                                    <img src="<?php echo $row["banner_image"]; ?>" alt="Image01" class="card-img-top">
                                    <div class="card-body">
                                        <div class="profile-container">
                                            <img src="<?php echo $row["author_picture"]; ?>" alt="author picture" width="50" height="50">
                                            <div class="names-container">
                                                <h6><?php echo $row["author"]; ?></h6>
                                                <h7>Senior Web Dev</h7>

                                            </div>
                                            <h6 class="right-text"><span style="font-weight: 800;">-</span> WEB DEV</h6>
                                        </div>
                                        <br>
                                        <h3 class="card-title"><?php echo $row["name"]; ?></h3>
                                        <p class="card-text">
                                            <?php echo $row["description"]; ?>
                                        </p>
                                        <div class="buttons">
                                            <a href="modify_course.php?id=<?php echo $row['id']; ?>" class="btn-normal">Modify</a>
                                            <a class="btn-delete" onclick="confirmDelete(<?php echo $row['id']; ?>)">Delete</a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                <?php
                    }
                } else {
                    echo "No courses found.";
                }

                // Close database connection
                $conn->close();
                ?>

                <!-- JavaScript function to confirm course deletion -->
                <script>
                    function confirmDelete(id) {
                        if (confirm('Are you sure you want to delete this course?')) {
                            window.location.href = 'delete_course.php?id=' + id;
                        }
                    }
                </script>






            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>

</html>