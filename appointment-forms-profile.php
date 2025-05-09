<?php
// Get data from the query string
$first_name = htmlspecialchars($_GET['first_name']);
$last_name = htmlspecialchars($_GET['last_name']);
$dob = htmlspecialchars($_GET['dob']);
$email = htmlspecialchars($_GET['email']);
$contact = htmlspecialchars($_GET['contact']);
$emergency_id = htmlspecialchars($_GET['emergency_id']);
$patient_id = htmlspecialchars($_GET['patient_id']);
$profile_image = htmlspecialchars($_GET['profile_image']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .profile-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 400px;
            text-align: center;
            border: 2px solid #ff4d4d;
        }
        .profile-container img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 2px solid #007bff;
        }
        .profile-container h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }
        .profile-container p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
        .continue-btn {
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
        }
        .continue-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <img src="<?= $profile_image ?>" alt="Profile Picture">
        <h3>Name: <?= $first_name ?> <?= $last_name ?></h3>
        <p>Date of Birth: <?= $dob ?></p>
        <p>Email: <?= $email ?></p>
        <p>Contact No: <?= $contact ?></p>
        <p>Emergency ID: <?= $emergency_id ?></p>
        <p>Patient ID: <?= $patient_id ?></p>
    </div>

    <!-- Redirect to emergency-symptoms.php after 5 seconds -->
    <script>
        setTimeout(function() {
            window.location.href = 'emergency-symptoms.php';
        }, 5000);
    </script>
</body>
</html>