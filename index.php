<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Health Connect System</title>
    <style>
        body {
            background-color: #a6f7ff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full viewport height */
            text-align: center;
        }
        .header {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .header h1 {
            font-size: 36px;
            color: #000;
            margin: 0;
        }
        .logo {
            font-size: 18px;
            color: #0096c7;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .content {
            margin-top: 20px;
        }
        .consultation-image {
            width: 800px;
            height: 450px;
        }
        .buttons {
            margin-top: 30px;
        }
        .btn {
            padding: 15px 30px;
            margin: 10px;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }
        .appointment-btn {
            background-color: #4d4dff;
            color: white;
        }
        .emergency-btn {
            background-color: #ff4d4d;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="logo"></div>
        <h1>HEALTH CONNECT SYSTEM</h1>
    </div>
    
    <div class="content">
        <h2 style="color: #5a5aff;">ONLINE CONSULTATION</h2>
        <img src="1.AVIF" alt="Online Consultation" class="consultation-image">
        
        <div class="buttons">
            <form action="appointment.php" method="get" style="display:inline;">
                <button class="btn appointment-btn">APPOINTMENT</button>
            </form>
            <form action="appointment-emergency.php" method="get" style="display:inline;">
                <button class="btn emergency-btn">EMERGENCY</button>
            </form>
        </div>
    </div>
</body>
</html>