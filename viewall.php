<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    <link rel="icon" type="image/x-icon" href="image/csit.png">
    <style>
        /* Reset default margin and padding */
        body, h1, h2, h3, p {
            
            margin: 0;
            padding: 0;
        }

        /* Global styles */
        body {
            font-family: Arial, Helvetica, sans-serif;
            width: 100%;
    height: 100vh;
    background: linear-gradient(135deg, #05073a, #dc0606ca);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
        }
 

        /* Container styles */
        .report-container {
            max-width: 1200px;
            margin: 70px auto;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        /* Header styles */
        .report-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 2px solid #000000;
        }

        .recent-Articles {
            font-size: 24px;
            font-weight: 600;
            color: #000000;
        }

        /* Table styles */
        #csit {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #csit th,
        #csit td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        #csit th {
            background-color: #781d1d;
            color: #fff;
        }

        /* Responsive table styles */
        @media (max-width: 768px) {
            #csit {
                font-size: 14px;
            }
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
    <div class="report-container">
        <div class="report-header">
            <h1 class="recent-Articles">Payment Information</h1>
        </div>
        <table id="csit">
            <tr>
                <th class="t-op">Student ID</th>
                <th class="t-op">Full Name</th>
                <th class="t-op">Email</th>
                <th class="t-op">Gender</th>
                <th class="t-op">Course</th>
                <th class="t-op">Year</th>
            </tr>
            <?php
            include "connection.php";
            $sql = "SELECT * FROM students ORDER BY student_id ASC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                    <td><?php echo $row["student_id"]; ?></td>
                    <td><?php echo $row["student_name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["gender"]; ?></td>
                    <td><?php echo $row["course"]; ?></td>
                    <td><?php echo $row["year"]; ?></td>
                </tr>
          

                <?php
                }
            }
            ?>
            
        </table>
        
        <div style="text-align: center;">
        <a href="receipt.php" class="edit-button">BACK</a>
    </div>
    </div>
</body>
</html>
