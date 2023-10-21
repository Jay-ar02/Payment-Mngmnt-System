<?php
include "connection.php";

if (isset($_POST['save'])) {
    $school_year = $_POST['school_year'];
    $semester = $_POST['semester'];
    $fee = $_POST['fee'];
    $due_date = $_POST['due_date'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO fees (description, amount, deadline, semester, school_year) VALUES ('$fee', '$amount', '$due_date', '$semester', '$school_year')"; 

    if ($conn->query($sql)) {
        echo "<script>window.location='admin.php'</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>