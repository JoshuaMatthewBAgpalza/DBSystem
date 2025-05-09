<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'profile');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $symptoms = $_POST['symptoms'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];

    // Handle file upload
    $target_dir = "uploads/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0755, true); // Create the directory if it doesn't exist
    }

    $profile_image_name = basename($_FILES["profile_image"]["name"]);
    $profile_image_path = $target_dir . $profile_image_name;

    if (move_uploaded_file($_FILES["profile_image"]["tmp_name"], $profile_image_path)) {
        // Generate unique IDs
        $emergency_id = rand(10000, 99999);
        $patient_id = date('Ymd') . rand(100, 999);

        // Insert data into the database (fixed table name here)
        $sql = "INSERT INTO proccess_appointments (first_name, last_name, dob, symptoms, email, contact, emergency_id, patient_id, appointment_date, profile_image) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssiss", $first_name, $last_name, $dob, $symptoms, $email, $contact, $emergency_id, $patient_id, $profile_image_path);

        if ($stmt->execute()) {
            header("Location: appointment-forms-profile.php?first_name=$first_name&last_name=$last_name&dob=$dob&email=$email&contact=$contact&emergency_id=$emergency_id&patient_id=$patient_id&profile_image=$profile_image_path");
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error uploading profile image.";
    }
}

$conn->close();
?>
