<?php
include "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>

    <!--favicon-->
    <link rel="icon" href="image/csitlogo.png" type="image/x-icon">

    <!--animate.css-->  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

<style>
  *{
    margin: 0;
    padding: 0;
    font-family: 'Roboto', sans-serif;
  }

  body{
    width: 100%;
    height: 100vh;
    background: linear-gradient(135deg, #05073a, #dc0606ca);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
  }

  form{
    display: block;
    flex-direction: column;
    align-items: center;
    margin: 50px auto;
    background:#94949442;
    backdrop-filter: blur(10px);
    padding: 50px;
    border-radius: 10px;
    border: 1px solid white;
    box-shadow: 0 5px 15px rgba(0,0,0,.2);
    max-width: 600px;
    width: 100%;
  }

  h3{
    color: white;
  }

  form label {
    color: white;
    display: block;
    margin-bottom: 10px;
    font-size: 16px;
  }

    form input[type="text"],
    form input[type="tel"],
    form input[type="password"],
    form input[type="date"],
    select,
    form input[type="file"],
    form input[type="radio"] {
    padding: 8px;
    border-radius: 5px;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    width: 100%;
    font-size: 16px;
    color: #000000;
    background: #ffffff;
  }

    form input[type="text"]:focus,
    form input[type="password"]:focus,
    form input[type="date"]:focus,
    select:focus,
    form input[type="file"]:focus,
    form input[type="radio"]:focus {
    outline: none;
    border-color: #3498db;
  }

 form button[type="submit"] {
    padding: 10px 0;
    margin-top: 10px;
    height: 10%;
    width: 50%;
    outline: none;
    color: #fff;    
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    cursor: pointer;
    background: linear-gradient(135deg, #dc0606ca, #05073a);
 }  

  form button[type="submit"]:hover {
    background-color: #2634fc;
  }

  .drp, label, select, option, form input:invalid {
    border-color: #e74c3c;
  }
    
  form input:valid {
    border-color: #2ecc71;
  }
    
  .inp-group {
    display: block;
    margin-left: 50px;
    text-align: center;
    max-width: 200%;
  }

  .inp-group > * {
    margin: 5px;
  }

  .inp-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }

  .inp-group input[type="text"],
  .inp-group input[type="password"] {
    padding: 5px;
    border-radius: 3px;
    border: 1px solid #ccc;
    margin-left: 10px;
    margin-right: 10px;
    font-size: 16px;
    outline: none;
    background: #d3d3d34b;
    width: 35%;
    text-align: center; 
  }

  .inp-group button {
    padding: 5px 10px;
    border-radius: 3px;
    border: none;
    background-color: green;
    color: #000000;
    font-size: 16px;
    cursor: pointer;
  }

  .streyt input {
    display: inline-block;
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    width: calc(50% - 5px); /* Subtract 5px to account for the 1px border on both sides */
    font-size: 16px;
    color: #23212160;
    background: #dddddd42;
  }

  .gitna{
    margin-left: -50px;
  }

  a{
    color: white;
    text-decoration: none
  }

</style>
    
</head>
<body>

<?php
/*include "connection.php";

if (isset($_POST['pay'])) {
    $full_name = $_POST['full_name'];
    $school_email = $_POST['school_email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $paid_date = $_POST['date_paid'];
    $amount = $_POST['amount'];

    // Insert new customer
    $insertCustomerSql = "INSERT INTO students (student_name, email, gender, course, year) VALUES ('$full_name', '$school_email', '$gender', '$course', '$year')";
    if ($conn->query($insertCustomerSql)) {
        $customerId = $conn->insert_id;

        // Insert new payment with the retrieved customer ID
        $insertPaymentSql = "INSERT INTO payments (transaction_id, date_paid, amount) VALUES ('$customerId', '$paid_date', '$amount')";
        if ($conn->query($insertPaymentSql)) {
            $latestOrderId = $conn->insert_id;

            // Update the values of the latest inserted row
            $updateSql = "UPDATE students 
                          JOIN payments ON students.student_id = payments.transaction_id 
                          SET students.student_name = '$full_name',
                              students.email = '$school_email',
                              students.gender = '$gender',
                              students.course = '$course',
                              students.year = '$year',
                              payments.date_paid = '$paid_date',
                              payments.amount = '$amount'
                          WHERE payments.transaction_id = '$latestOrderId'";
            if ($conn->query($updateSql)) {
                echo "<script>window.location='receipt.php'</script>";
            } else {
                echo "Error updating values: " . $conn->error;
            }
        } else {
            echo "Error inserting payment data: " . $conn->error;
        }
    } else {
        echo "Error inserting customer data: " . $conn->error;
    }
}

// Retrieve the latest inserted value for display
$sql = "SELECT * FROM students
        JOIN payments ON students.student_id = payments.transaction_id 
        ORDER BY payments.transaction_id DESC 
        LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Access the values from $row and display them
} else {
    echo "No orders found.";
}
*/

include "connection.php";

if (isset($_POST['pay'])) {
    $full_name = $_POST['full_name'];
    $school_email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $paid_date = $_POST['paid_date'];
    $amount = $_POST['amount'];

    // Insert new customer
    $insertCustomerSql = "INSERT INTO 'students`('student_name`, 'email', 'gender', 'course', 'year') VALUES ('$full_name', '$school_email', '$gender', '$course', '$year')";
    if ($conn->query($insertCustomerSql)) {
        $customerId = $conn->insert_id; // Get the last inserted customer ID

        // Insert new order with the retrieved customer ID
        $insertOrderSql = "INSERT INTO 'payments`('transaction_id`, 'paid_date', 'amount') VALUES ('$customerId', '$paid_date', '$amount')";
        if ($conn->query($insertOrderSql)) {
            // Get the latest inserted order ID
            $latestOrderId = $conn->insert_id;

            // Update the values of the latest inserted row
            $updateSql = "UPDATE students 
                          JOIN payments ON students.student_id = payments.transaction_id 
                          SET students.student_name = '$full_name',
                              students.email = '$school_email',
                              students.gender = '$gender',
                              students.course = '$course',
                              students.year = '$year',
                              payments.date_paid = '$paid_date',
                              payments.amount = '$amount'
                          WHERE payments.transaction_id = '$latestOrderId'";
            if ($conn->query($updateSql)) {
                echo "<script>window.location='receipt.php'</script>";
            } else {
                echo "Error updating values: " . $conn->error;
            }
        } else {
            echo "Error inserting order data: " . $conn->error;
        }
    } else {
        echo "Error inserting customer data: " . $conn->error;
    }
}

// Retrieve the latest inserted value for display
$sql = "SELECT * FROM students 
        JOIN payments ON students.student_id = payments.transaction_id 
        ORDER BY payments.transaction_id DESC 
        LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Access the values from $row and display them
} else {
    echo "No orders found.";
}

?>


  <br>
  <br>
      <form method="POST" action="edit_func.php">

        <center><img src="image/csitlogo.png" width="100px" alt=""></center>
        <center><h3>Student Fee</h3></center><br>
    
        <div class="neymm">
          <label>Full Name</label>
          <input type="text" name="full_name" placeholder="Enter your full name" value="<?php echo $row['student_name']; ?>" required>

          <label>School Email</label>
          <input type="text" name="email" placeholder="Enter your school provided email" value="<?php echo $row['email']; ?>" required>

          <label>Gender</label>
          <input type="text" name="gender" placeholder="Enter your gender" value="<?php echo $row['gender']; ?>" required>

          <label>Course</label>
          <input type="text" name="course" placeholder="Enter your course" value="<?php echo $row['course']; ?>" required>

          <label>Year</label>
          <input type="text" name="year" placeholder="Enter your year level" value="<?php echo $row['year']; ?>" required>

          <label>Date Paid</label>
          <input type="date" name="paid_date" pattern="\d{4}-\d{2}-\d{2}" value="<?php echo $row['date_paid']; ?>" required>

          <label>Amount</label>
          <input type="text" name="amount" placeholder="Type the total amount" value="<?php echo $row['amount']; ?>" required>
        </div>

        <div class="inp-group">
          <button type="submit" id="submit-btn" name="pay">Update</button>
        </div>
      </form>

</body>
</html>