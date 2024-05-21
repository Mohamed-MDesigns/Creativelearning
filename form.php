<?php
include('conn.php');

// Function to confirm data deletion
function confirmDelete($id)
{
    echo "<script>
            var confirmation = confirm('Are you sure you want to delete this record?');
            if (confirmation) {
                window.location.href = 'delete.php?id={$id}';
            }
          </script>";
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];

    // Prepare and bind
    $insert_query = "INSERT INTO form(Name, Email, Phone) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insert_query);
    $stmt->bind_param("sss", $name, $email, $pnumber);

    // Execute the statement
    if ($stmt->execute()) {
        echo "<script>alert('Data inserted successfully!');</script>";
    } else {
        echo "<script>alert('ERROR');</script>";
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="sidebar.css">
    <link rel="stylesheet" href="form.css">
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
            <a href="dashboard.php" class="btn-normal">Dashboard</a>
            <h2>Formulaire page</h2>
            <br>

            <h3>Data Insertion</h3>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="form-group">
                    <label for="name">Name</label><br>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label><br>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="pnumber">Phone Number</label><br>
                    <input type="number" class="form-control" id="pnumber" name="pnumber" required>
                </div>
                <button type="submit" class="btn-normal">Submit</button>
            </form>

            <br><br>

            <h3>Data List</h3>
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
                            <a href='#' class='btn-delete' onclick='confirmDelete(" . $row["Id"] . ")'>Delete</a>
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

    <script>
        function confirmDelete(id) {
            var confirmation = confirm('Are you sure you want to delete this record?');
            if (confirmation) {
                window.location.href = 'delete.php?id=' + id;
            }
        }
    </script>

</body>

</html>

<?php
// Close database connection
$conn->close();
?>