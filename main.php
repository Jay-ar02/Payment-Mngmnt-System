<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Main Page</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" type="image/x-icon" href="image/csit.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .w3-row {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #781d1d, #05073a);
        }

        .w3-half {
            flex: 1;
            padding: 20px;
            text-align: center;
            color: white;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: white;
        }

        .w3-button {
            background-color: #781d1d;
            color: white; /* Set the initial font color to white */
            font-weight: bold;
            text-decoration: none;
            padding: 16px 32px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .w3-button:hover {
            background: linear-gradient(135deg, #05073a, #dc0606ca);
            color: white; /* Change the font color to white on hover */
        }

        .w3-half2 {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .w3-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid #dc0606ca;
        }
        .edit-button, .view-all-button {
            display: inline-block;
            padding: 10px 20px;
            margin: 10px;
            background: linear-gradient(135deg, #dc0606ca, #05073a);
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .edit-button:hover, .view-all-button:hover {
            background-color: #3e008f; /* Darker color on hover */
        }
        
    </style>
</head>
<body>

<div class="w3-row">
    <div class="w3-half">
        <div class="w3-padding-64">
            <h2>Welcome to the CSITS Payment Management System</h2>
            <div style="text-align: center;">
        <a href="student.php" class="edit-button">STUDENT</a>
        <a href="admin.php" class="view-all-button">ADMIN</a>
    </div>
        </div>
    </div>
    <div class="w3-half2">
        <div class="w3-padding-64 w3-center">
           
            <img src="image/csitlogo.png" class="w3-margin w3-circle" alt="CSIT Logo">
        </div>
    </div>
</div>

</body>
</html>
