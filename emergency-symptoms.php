<?php
// Safely get data from query string with fallbacks
$first_name = isset($_GET['first_name']) ? htmlspecialchars($_GET['first_name']) : 'Guest';
$last_name = isset($_GET['last_name']) ? htmlspecialchars($_GET['last_name']) : '';
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : 'Not Provided';
$profile_image = isset($_GET['profile_image']) ? htmlspecialchars($_GET['profile_image']) : 'default.png'; // Use a placeholder if not provided
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #b71c1c;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 20px;
            background-color: #b71c1c;
            color: white;
        }
        .header .logo {
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .profile {
            display: flex;
            align-items: center;
        }
        .profile img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-right: 10px;
            object-fit: cover;
        }
        .profile-info {
            text-align: right;
        }
        .profile-info p {
            margin: 0;
            font-size: 14px;
            color: white;
        }
        .categories-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 40px 0;
            width: 80%;
        }
        .category-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            padding: 50px; /* Increased padding */
            cursor: pointer;
            transition: transform 0.2s;
        }
        .category-card:hover {
            transform: scale(1.05);
        }
        .category-card img {
            width: 200px; /* Increased width */
            height: 300px; /* Increased height */
            margin-bottom: 15px; /* Adjusted margin */
        }
        .category-card h3 {
            margin: 0;
            font-size: 18px; /* Increased font size */
            color: #333;
        }
        .back-button {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #fff;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo">OnlineDoctor</div>
        <div class="profile">
            <img src="<?= $profile_image ?>" alt="Profile Picture">
            <div class="profile-info">
                <p><?= $first_name ?> <?= $last_name ?></p>
                <p><?= $email ?></p>
            </div>
        </div>
    </div>

    <div class="categories-container">
        <div class="category-card" onclick="window.location.href='cardiology.php?first_name=<?= urlencode($first_name) ?>&last_name=<?= urlencode($last_name) ?>&email=<?= urlencode($email) ?>&profile_image=<?= urlencode($profile_image) ?>';">
            <img src="images/car.webp" alt="Cardiology">
            <h3>Cardiology</h3>
        </div>
        <div class="category-card" onclick="window.location.href='pediatric.php?first_name=<?= urlencode($first_name) ?>&last_name=<?= urlencode($last_name) ?>&email=<?= urlencode($email) ?>&profile_image=<?= urlencode($profile_image) ?>';">
            <img src="images/ped.jpg" alt="Pediatric">
            <h3>Pediatric</h3>
        </div>
        <div class="category-card" onclick="window.location.href='dentistry.php?first_name=<?= urlencode($first_name) ?>&last_name=<?= urlencode($last_name) ?>&email=<?= urlencode($email) ?>&profile_image=<?= urlencode($profile_image) ?>';">
            <img src="images/den.webp" alt="Dentistry">
            <h3>Dentistry</h3>
        </div>
        <div class="category-card" onclick="window.location.href='radiology.php?first_name=<?= urlencode($first_name) ?>&last_name=<?= urlencode($last_name) ?>&email=<?= urlencode($email) ?>&profile_image=<?= urlencode($profile_image) ?>';">
            <img src="images/rad.jpg" alt="Radiology">
            <h3>Radiology</h3>
        </div>
        <div class="category-card" onclick="window.location.href='surgery.php?first_name=<?= urlencode($first_name) ?>&last_name=<?= urlencode($last_name) ?>&email=<?= urlencode($email) ?>&profile_image=<?= urlencode($profile_image) ?>';">
            <img src="images/surge.webp" alt="Surgery">
            <h3>Surgery</h3>
        </div>
        <div class="category-card" onclick="window.location.href='pathology.php?first_name=<?= urlencode($first_name) ?>&last_name=<?= urlencode($last_name) ?>&email=<?= urlencode($email) ?>&profile_image=<?= urlencode($profile_image) ?>';">
            <img src="images/path.avif" alt="Pathology">
            <h3>Pathology</h3>
        </div>
    </div>
    <div class="back-button" onclick="window.location.href='index.php';">⬅️</div>
</body>
</html>