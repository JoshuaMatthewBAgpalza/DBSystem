<?php
// Connect to the database
$conn = new mysqli('localhost', 'root', '', 'profile');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the latest user from the database based on the most recent appointment
$sql = "SELECT first_name, last_name, email, profile_image 
        FROM appointments 
        ORDER BY appointment_date DESC LIMIT 1"; // Fetch the latest appointment
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
} else {
    die("No user found in the database.");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Doctor Symptom Selector</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #00a99d;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            color: #333;
        }
        .avatar {
            position: fixed;
            top: 20px;
            right: 20px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            flex-direction: column;
            text-align: center;
            color: white;
        }
        .avatar img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            cursor: pointer;
            margin-bottom: 10px;
        }
        .avatar h3 {
            margin: 0;
            font-size: 1rem;
        }
        .avatar p {
            margin: 0;
            font-size: 0.9rem;
        }
        .title {
            color: white;
            font-weight: 700;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 15px;
            width: 100%;
            max-width: 1200px;
        }
        .card {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .card h3 {
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
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
<div class="avatar" 
     data-email="<?= htmlspecialchars($user['email']) ?>" 
     onclick="redirectToProfile(this)">
    <img src="images/<?= htmlspecialchars($user['profile_image']) ?>" alt="Avatar">
    <h3><?= htmlspecialchars($user['first_name'] . ' ' . $user['last_name']) ?></h3>
    <p><?= htmlspecialchars($user['email']) ?></p>
</div>

<script>
    function redirectToProfile(element) {
        const email = element.getAttribute('data-email'); // Get the email from the data attribute
        window.location.href = `profile.php?email=${encodeURIComponent(email)}`; // Redirect to profile.php with email
    }

    function redirectToPage(symptom) {
        // Map symptom names to file names
        const symptomToFileMap = {
            "General Symptoms": "general-symptoms.php",
            "Respiratory Symptoms": "respiratory-symptoms.php",
            "Heart-Related Symptoms": "heart-related-symptoms.php",
            "Digestive Symptoms": "digestive-symptoms.php",
            "Neurological Symptoms": "neurological-symptoms.php",
            "Skin-Related Symptoms": "skin-related-symptoms.php",
            "Eye-Related Symptoms": "eye-related-symptoms.php",
            "Urinary Symptoms": "urinary-symptoms.php",
            "Mental Health Symptoms": "mental-health-symptoms.php",
            "Allergic Symptoms": "allergic-symptoms.php"
        };

        // Redirect to the corresponding file
        const fileName = symptomToFileMap[symptom];
        if (fileName) {
            window.location.href = fileName;
        } else {
            alert("Page not found for the selected symptom.");
        }
    }
</script>

<div class="title">Please select symptoms</div>

<div class="card-grid">
    <div class="card" onclick="redirectToPage('General Symptoms')">
        <h3>GENERAL SYMPTOMS</h3>
        <p>Fever, fatigue, weight loss, or general weakness.</p>
    </div>
    <div class="card" onclick="redirectToPage('Respiratory Symptoms')">
        <h3>RESPIRATORY SYMPTOMS</h3>
        <p>Cough, shortness of breath, chest pain, or wheezing.</p>
    </div>
    <div class="card" onclick="redirectToPage('Heart-Related Symptoms')">
        <h3>HEART-RELATED SYMPTOMS</h3>
        <p>Chest pain, palpitations, high blood pressure, or dizziness.</p>
    </div>
    <div class="card" onclick="redirectToPage('Digestive Symptoms')">
        <h3>DIGESTIVE SYMPTOMS</h3>
        <p>Abdominal pain, bloating, diarrhea, constipation, or heartburn.</p>
    </div>
    <div class="card" onclick="redirectToPage('Neurological Symptoms')">
        <h3>NEUROLOGICAL SYMPTOMS</h3>
        <p>Headaches, dizziness, numbness, seizures, or memory loss.</p>
    </div>
    <div class="card" onclick="redirectToPage('Skin-Related Symptoms')">
        <h3>SKIN-RELATED SYMPTOMS</h3>
        <p>Rashes, itching, acne, or skin discoloration.</p>
    </div>
    <div class="card" onclick="redirectToPage('Eye-Related Symptoms')">
        <h3>EYE-RELATED SYMPTOMS</h3>
        <p>Blurred vision, eye pain, redness, or dryness.</p>
    </div>
    <div class="card" onclick="redirectToPage('Urinary Symptoms')">
        <h3>URINARY SYMPTOMS</h3>
        <p>Painful urination, blood in urine, or frequent urination.</p>
    </div>
    <div class="card" onclick="redirectToPage('Mental Health Symptoms')">
        <h3>MENTAL HEALTH SYMPTOMS</h3>
        <p>Anxiety, depression, mood swings, or insomnia.</p>
    </div>
    <div class="card" onclick="redirectToPage('Allergic Symptoms')">
        <h3>ALLERGIC SYMPTOMS</h3>
        <p>Sneezing, itching, hives, or swelling.</p>
    </div>
</div>
<div class="back-button" onclick="window.location.href='index.php';">⬅️</div>
</body>
</html>