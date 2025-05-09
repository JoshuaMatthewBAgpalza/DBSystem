<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor Profiles</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #00a99d;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: #333;
        }
        .doctor-grid {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
            max-width: 1200px;
        }
        .doctor-card {
            background-color: #d3d3d3;
            border-radius: 15px;
            padding: 20px;
            width: 300px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .doctor-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .doctor-card img {
            width: 100%;
            height: auto;
            border-radius: 15px;
            margin-bottom: 15px;
        }
        .doctor-card p {
            margin: 5px 0;
            font-weight: 500;
        }
        .doctor-card h4 {
            margin-bottom: 10px;
            font-weight: 700;
            color: #333;
        }
        .back-button {
            position: fixed;
            top: 20px;
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
    <div class="back-button" onclick="window.location.href='emergency.php';">⬅️</div>
    <div class="doctor-grid">
        <div class="doctor-card">
            <img src="images/drn1.jpg" alt="Dr. Abegail Morgan">
            <h4>Dr. Abegail Morgan</h4>
            <p>Specialization: Neurological Symptoms</p>
            <p>Schedule: MW</p>
            <p>Time: 7:00-11:30AM</p>
            <p>ID: 20240301</p>
        </div>
        <div class="doctor-card">
            <img src="images/drn2.jpg" alt="Dr. Elizabeth Wright">
            <h4>Dr. Elizabeth Wright</h4>
            <p>Specialization: Neurological Symptoms</p>
            <p>Schedule: TTH</p>
            <p>Time: 9:00-3:00PM</p>
            <p>ID: 987654</p>
        </div>
        <div class="doctor-card">
            <img src="images/drn3.jpg  " alt="Dr. Madison Cooper">
            <h4>Dr. Madison Cooper</h4>
            <p>Specialization: Neurological Symptoms</p>
            <p>Schedule: SS</p>
            <p>Time: 10:00-4:00PM</p>
            <p>ID: 456123</p>
        </div>
    </div>
</body>
</html>