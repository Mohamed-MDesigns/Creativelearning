<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="allstyles.css">
    <link rel="stylesheet" href="user-course.css">
    <title>Creative Learning | Courses </title>
</head>

<body>
    <div class="container">
        <?php
        include("header.php");
        ?>

        <div class="main-content">

            <div class="courses-cards">
                <?php
                // Include database connection
                include('conn.php');

                // Fetch courses from the database
                $fetch_query = "SELECT * FROM `courses` WHERE `stat`=2";
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
                                        <?php
                                        if (isset($_GET["user"])) {
                                        ?>
                                            <button class="btn-normal">Subscribe</button>
                                        <?php
                                        } else if (isset($_GET["admin"])) {
                                        ?>
                                            <div class="buttons">
                                                <a href="dashboard.php" class="btn-normal">Modify</a>
                                                <a class="btn-delete" href="dashboard.php">Delete</a>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="buttons"><a class="btn-normal" href="login.php">Sign in</a></div>
                                        <?php
                                        }
                                        ?>
                                        

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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js"></script>
</body>

</html>