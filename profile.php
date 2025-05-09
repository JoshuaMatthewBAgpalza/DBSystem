<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'profile');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the latest appointment if no email is provided
$sql = "SELECT first_name, last_name, dob, gender, email, contact, appointment_date, profile_image 
        FROM appointments 
        ORDER BY appointment_date DESC LIMIT 1"; // Fetch the latest record by appointment_date
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    die("No records found in the database.");
}
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
            background-color: #1e90ff;
            color: white;
            text-align: center;
            padding: 20px;
        }
        .profile-card {
            background-color: white;
            color: #333;
            border-radius: 10px;
            padding: 20px;
            max-width: 400px;
            margin: 20px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .profile-card img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-bottom: 20px;
        }
        .back-button {
            margin-top: 20px;
            display: inline-block;
            padding: 10px 20px;
            background-color: white;
            color: #1e90ff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }
        .back-button:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="profile-card">
        <img src="images/<?= htmlspecialchars($user['profile_image']) ?>" alt="Profile Image">
        <h2><?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?></h2>
        <p><strong>Date of Birth:</strong> <?= htmlspecialchars($user['dob']) ?></p>
        <p><strong>Gender:</strong> <?= htmlspecialchars($user['gender']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
        <p><strong>Contact:</strong> <?= htmlspecialchars($user['contact']) ?></p>
        <p><strong>Appointment Date:</strong> <?= htmlspecialchars($user['appointment_date']) ?></p>
    </div>

    <!-- Redirect to emergency.php after 5 seconds -->
<script>
    setTimeout(function() {
        window.location.href = 'emergency.php';
    }, 5000);
</script>

</body>
</html>