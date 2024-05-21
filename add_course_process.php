<?php
include('conn.php');

// Retrieve form data
$name = isset($_POST['name']) ? $_POST['name'] : null;
$author = isset($_POST['author']) ? $_POST['author'] : null;
$description = isset($_POST['description']) ? $_POST['description'] : null;
$status = isset($_POST['status']) ? $_POST['status'] : 1; // Default to 1 if not checked

// Validate and handle file uploads
$author_picture_blob = handleFileUpload('author_picture', 3); // Limit to 3MB for author picture
$banner_image_blob = handleFileUpload('banner_image', 15); // Limit to 15MB for banner image

if ($name && $author && $description && $author_picture_blob && $banner_image_blob) {
    // Insert course data into the database
    $insert_query = "INSERT INTO courses (name, author, author_picture, banner_image, description, stat) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insert_query);
    
    // Bind parameters
    $null = NULL; // Placeholder for BLOB data
    $stmt->bind_param("ssbbsi", $name, $author, $null, $null, $description, $status);

    // Execute query
    if ($stmt->execute()) {
        // Get the last inserted ID
        $course_id = $stmt->insert_id;

        // Create directory if it doesn't exist
        $course_dir = "images/courses/$course_id/";
        if (!file_exists($course_dir)) {
            mkdir($course_dir, 0777, true);
        }

        // Save images in the course directory
        $author_picture_path = $course_dir . basename($_FILES['author_picture']['name']);
        $banner_image_path = $course_dir . basename($_FILES['banner_image']['name']);
        move_uploaded_file($_FILES['author_picture']['tmp_name'], $author_picture_path);
        move_uploaded_file($_FILES['banner_image']['tmp_name'], $banner_image_path);

        // Update database with image paths
        $update_query = "UPDATE courses SET author_picture = ?, banner_image = ? WHERE id = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("ssi", $author_picture_path, $banner_image_path, $course_id);
        $stmt->execute();

        echo 'Course added successfully!
        <br>
        <a href="dashboard.php" class="btn btn-primary">Back to dashboard</a>
        <a href="course.php" class="btn btn-primary">Go to course list</a>
        ';
    } else {
        echo "Error adding course: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: One or more required fields are empty.";
}

$conn->close();

// Function to handle file upload
function handleFileUpload($input_name, $max_size) {
    if (!isset($_FILES[$input_name]) || $_FILES[$input_name]["error"] == UPLOAD_ERR_NO_FILE) {
        echo "Error: No file uploaded for " . $input_name;
        return false;
    }

    if ($_FILES[$input_name]["size"] > $max_size * 1024 * 1024) {
        echo "Sorry, your file is too large.";
        return false;
    }

    $allowed_types = array('jpg', 'jpeg', 'png', 'gif');
    $file_extension = strtolower(pathinfo($_FILES[$input_name]["name"], PATHINFO_EXTENSION));
    if (!in_array($file_extension, $allowed_types)) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        return false;
    }

    $file_content = file_get_contents($_FILES[$input_name]["tmp_name"]); // Read file content

    return $file_content; // Return file content as BLOB
}
?>
