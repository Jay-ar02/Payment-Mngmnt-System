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

     $sql = "INSERT INTO `students` (`student_name`, `email`, `gender`, `course`, `year`) 
             VALUES ('$full_name', '$school_email', '$gender', '$course', '$year');
             INSERT INTO `payments` (`student_id`, `date_paid`, `amount`) 
             VALUES (LAST_INSERT_ID(), '$paid_date', '$amount')"; 

     // enable multi_query option
     $conn->multi_query($sql);

     if ($conn->errno) {
        echo "Error: " . $conn->error;
     } else {
        echo "<script>window.location='receipt.php'</script>";
     }
 }
 ?>
