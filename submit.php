<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'profile');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $appointment_date = $_POST['appointment_date'];
    $profile_image = $_FILES['profile_image']['name'];

    // Move uploaded file to the images directory
    if (!empty($_FILES['profile_image']['tmp_name'])) {
        $upload_dir = "images/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); // Create the directory if it doesn't exist
        }
        move_uploaded_file($_FILES['profile_image']['tmp_name'], $upload_dir . $_FILES['profile_image']['name']);
    }

    // Insert data into the database
    $sql = "INSERT INTO appointments (first_name, last_name, dob, gender, email, contact, appointment_date, profile_image)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $first_name, $last_name, $dob, $gender, $email, $contact, $appointment_date, $profile_image);

    if ($stmt->execute()) {
        echo "Record inserted successfully.";
        header("Location: profile.php?email=" . urlencode($email)); // Redirect to profile page
        exit;
    } else {
        echo "Error: " . $stmt->error;
    }
} else {
    echo "Invalid request method.";
}
?>