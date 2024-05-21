<?php
include('conn.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="add_course.css">
    <title>Creative Learning | Add Course </title>
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
            <div class="dashboard_links">
                <a href="dashboard.php" class="btn-normal">Back to dashboard</a>
                <a href="course.php" class="btn-normal">Course List</a>
            </div>
            <div class="course_form">
                <h2>Add Course</h2>

                <form action="add_course_process.php" class="course_formulaire" method="post" enctype="multipart/form-data">
                    <label for="name">Course Name:</label><br>
                    <input class="form-control" type="text" id="name" name="name" required><br><br>

                    <label for="author">Author:</label><br>
                    <input class="form-control" type="text" id="author" name="author"><br><br>

                    <label for="author_picture">Author Picture:</label><br>
                    <input class="form-control" type="file" id="author_picture" name="author_picture" accept="image/*">
                    <p>Note: Author picture should be less than 3 megabytes </p><br><br>

                    <label for="banner_image">Banner Image:</label><br>
                    <input class="form-control" type="file" id="banner_image" name="banner_image" accept="image/*">
                    <p>and banner image should be less than 15 megabytes.</p><br><br>

                    <label for="description">Description:</label><br>
                    <textarea class="form-control" style="width: 500px; height:250px;" id="description" name="description" required></textarea><br><br>

                    <label for="status">Status:</label><br>
                    <input class="no-width" type="checkbox" id="status" name="status" value="2"> <!-- Value 1 represents hide, 2 represents show -->
                    <h5>Show</h5>

                    <input id="no-width" class="btn-normal" type="submit" value="Submit">
                </form>
            </div>




        </div>

    </div>

</body>

</html>