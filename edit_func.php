<?php
include "connection.php";

if (isset($_POST['pay'])) {
    $full_name = $_POST['full_name'];
    $school_email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $paid_date = $_POST['paid_date'];
    $amount = $_POST['amount'];

    // Insert new student
    $insertStudentSql = "INSERT INTO students (student_name, email, gender, course, year) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($insertStudentSql);
    $stmt->bind_param("sssss", $full_name, $school_email, $gender, $course, $year);
    $stmt->execute();

    // Get the inserted student ID
    $studentId = $stmt->insert_id;
    $stmt->close();

    // Insert payment
    $insertPaymentSql = "INSERT INTO payments (student_id, date_paid, amount) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($insertPaymentSql);
    $stmt->bind_param("iss", $studentId, $paid_date, $amount);
    $stmt->execute();

    // Redirect to receipt page
    header('Location: receipt.php');
    exit();
}

// Retrieve the latest inserted value for display
$sql = "SELECT * FROM students JOIN payments ON students.student_id = payments.student_id ORDER BY payments.transaction_id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Access the values from $row and display them
    echo "Latest inserted order for customer with ID 1 is: Order ID - " . $row["transaction_id"] . ", Order Date - " . $row["date_paid"] . ", Amount - " . $row["amount"];
} else {
    echo "No orders found for customer with ID 1";
}
?>
