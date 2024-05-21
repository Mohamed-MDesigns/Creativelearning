<?php
include("conn.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="sidebar.css">
    <title>Creative Learning | Dashboard </title>
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
            <div class="admin-welcome">
                <h1>Welcome to admin page</h1>
                <p>here down bellow you will see the people that register to your website</p>

            </div>
            <div class="admin-user-count">
                <h3>Users</h3>
                <p style="color: green;">You Got : <?php include("dashboard-userstab.php"); ?></p>
            </div>
            <div class="manage-admins">
                <h3>Manage Admin</h3>
                <form action="" method="post">
                    <label for="addduser">
                        <p>Add admin</p>
                        <input type="text" class="form-control" id="username" name='username'>
                    </label>
                    <button type="submit" class="btn-form-control">Add</button>
                </form><br>
            </div>

            <div class="admin-add-courses">
                <h3>Add courses</h3>
                <a href="add_course.php" class="btn-course">Courses</a>
                <br>
                <br>
            </div>

            <div class="admin-list-courses">
                <h3>List courses</h3>
                <a href="course.php" class="btn-course">Courses</a>
                <br>
                <br>
            </div>

            <div class="admin-formulaire-page">
                <h3>Form Section</h3><br>
                <h5>To add or delete student click on formulaire button</h5><br>
                <a href="form.php" class="btn-course">Fromulaire</a>
                <br>
                <br>
            </div>

            <div class="admin-formulaire-page">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Fetch and display data
                        $fetch_query = "SELECT * FROM form";
                        $result = $conn->query($fetch_query);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["Id"] . "</td>";
                                echo "<td>" . htmlspecialchars($row["Name"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["Email"]) . "</td>";
                                echo "<td>" . htmlspecialchars($row["Phone"]) . "</td>";
                                echo "<td>
                            <a href='' class='btn-course' >Modify</a>
                          ";
                                echo "
                          <a href='form.php' class='btn-delete' onclick='confirmDelete(" . $row["Id"] . ")'>Delete</a>
                        </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='4'>No data found</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>