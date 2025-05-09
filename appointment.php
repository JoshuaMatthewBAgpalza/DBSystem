<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .form-container {
            max-width: 600px;
            margin: 30px auto;
            padding: 25px;
            border: 1px solid #888;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.15);
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }
        input, select {
            padding: 8px;
            width: calc(100% - 18px);
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .name-row input {
            width: calc(48% - 2px);
            display: inline-block;
            margin-right: 2%;
        }
        .submit-btn {
            background-color: limegreen;
            color: white;
            font-weight: bold;
            padding: 10px 25px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
        }
        .submit-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

<div class="form-container">
    <form action="submit.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Name</label>
            <div class="name-row">
                <input type="text" name="first_name" placeholder="First Name" required>
                <input type="text" name="last_name" placeholder="Last Name" required>
            </div>
        </div>

        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="form-control" required 
            min="1900-01-01" max="2025-12-31">
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select name="gender" required>
                <option value="" disabled selected>Please Select</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="example@gmail.com" required>
        </div>

        <div class="form-group">
            <label>Contact No:</label>
            <input type="tel" name="contact" pattern="09[0-9]{9}" title="Enter a valid 11-digit number starting with 09" required>
        </div>

        <div class="form-group">
            <label>Appointment Date</label>
            <input type="date" name="appointment_date" required min="<?= date('Y-m-d') ?>">
        </div>

        <div class="form-group">
            <label>Profile Image</label>
            <input type="file" name="profile_image" accept="image/*" required>
        </div>

        <div class="form-group" style="text-align: center;">
            <button type="submit" class="submit-btn">SUBMIT</button>
        </div>
    </form>
</div>


</body>
</html>
