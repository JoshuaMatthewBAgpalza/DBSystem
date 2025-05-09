<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardiology</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8d7da;
            margin: 0;
            padding: 20px;
        }
        .header {
            display: flex;
            flex-direction: column;
            align-items: center; /* Centers the title horizontally */
            margin-bottom: 20px;
        }
        .back-button {
            position: fixed; /* Fixes the button at the top left corner */
            left: 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            font-size: 14px;
            margin-bottom: 10px; /* Adds spacing between the button and the title */
        }
        .back-button:hover {
            background-color: #0056b3;
        }
        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }
        .doctors-container {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 20px;
        }
        .doctor-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 350px;
            padding: 20px;
            text-align: center;
            border: 3px solid #b71c1c;
        }
        .doctor-card img {
            display: block;
            margin: 0 auto;
            width: 200px;
            height: 300px;
            border-radius: 10px;
            margin-bottom: 15px;
            object-fit: cover;
        }
        .doctor-card h3 {
            margin: 10px 0;
            font-size: 18px;
            color: #333;
        }
        .doctor-card p {
            margin: 5px 0;
            font-size: 14px;
            color: #555;
        }
        .status {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            margin-bottom: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>
    <div class="header">
        <button class="back-button" onclick="window.history.back();">← Back</button>
        <div class="title">Radiology</div>
    </div>
    <div class="doctors-container">
        <div class="doctor-card">
            <span class="status">ONLINE</span>
            <img src="images/rad1.jpg" alt="Doctor 1">
            <h3>Name: Quing, Federick Benjamin L. MD.</h3>
            <p>Specialization: Radiology</p>
            <p>Schedule: MW</p>
            <p>Time: 7:00-11:30AM</p>
            <p>ID: 1002345678</p>
        </div>
        <div class="doctor-card">
            <span class="status">ONLINE</span>
            <img src="images/rad2.jpg" alt="Doctor 2">
            <h3>Name: Quidayan, Hanna Lee C. MD</h3>
            <p>Specialization: Radiology</p>
            <p>Schedule: TTH</p>
            <p>Time: 9:00-3:00PM</p>
            <p>ID: 2003456789</p>
        </div>
        <div class="doctor-card">
            <span class="status">ONLINE</span>
            <img src="images/rad3.jpg" alt="Doctor 3">
            <h3>Name: Lambio, April Ann F. MD</h3>
            <p>Specialization: Radiology</p>
            <p>Schedule: MW</p>
            <p>Time: 7:30-11:30AM</p>
            <p>ID: 3004567890</p>
        </div>
    </div>
</body>
</html>