<?php
include "connection.php";

if (isset($_POST['pay'])) {
    $full_name = $_POST['full_name'];
    $school_email = $_POST['school_email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $paid_date = $_POST['date_paid'];
    $amount = $_POST['amount'];

    $sql = "INSERT INTO 'students' ('full_name', 'email', 'gender', 'course', 'year') VALUES (LAST_INSERT_ID(), '$full_name', '$school_email', '$gender', '$course', '$year');
            INSERT INTO 'payments' ('date_paid', 'amount') VALUES (LAST_INSERT_ID(), '$paid_date', '$amount')"; 

    }
?>

<title>Payment Details</title>

    <!--favicon-->
    <link rel="icon" href="image/csitlogo.png" type="image/x-icon">

<style>
     body {
        background: linear-gradient(135deg, #676770, #dc0606ca);
     }

    #invoice-POS{
        box-shadow: 0 0 1in .10in rgba(0, 0, 0, 0.5);
        padding:2mm;
        margin: 0 auto;
        width: 90mm;
        background: #FFF;
    }
    
    ::selection {background: #f31544; color: #FFF;}
    ::moz-selection {background: #f31544; color: #FFF;}
    h1{
        font-size: 20px;
        letter-spacing: 5px;
        font-weight: 600;
        color: #222;
    }
    h2{
        line-height: .4em;
    }
    h3{ 
        font-weight: 300;
        line-height: 2em;
    }
    
    p{
        color: #666;
        line-height: 1.2em;
    }
    
    #top, #mid,#bot{ /* Targets all id with 'col-' */
        border-bottom: 1px solid #EEE;
    }

    #top{min-height: 100px;}
    #mid{min-height: 80px;} 
    #bot{ min-height: 50px;}

    #top .logo{
        //float: left;
        height: 60px;
        width: 60px;
        background: url(image/csitlogo.png) no-repeat;
        background-size: 60px 60px;
    }
    
    .info{
        display: block;
        //float:left;
        margin-left: 0;

    }
    .title{
        float: right;
    }

    .title p{text-align: right;} 
    table{
        width: 100%;
        text-align: center;
        border: 5px;
    }
    
    td{
        padding: 5px 0 5px px;
        border: 1px solid #EEE;
    }

    .tabletitle{
        padding: 100px;
        width: 100%;
        background: #EEE;
    }

    .service{
        border-bottom: 50px solid #EEE;
    }

    .item{width: 40mm;}
    

    #legalcopy h4{
        border-bottom: 10px solid #EEE;
        margin-top: 5mm;
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
<body>
<br>
<br>
<br>


<?php

// Retrieve the inserted data
$id = $conn->insert_id;
$sql = "SELECT * FROM students 
        JOIN payments ON students.student_id = payments.student_id
        -- JOIN fees ON payments.transaction_id = fees.transaction_id
        -- WHERE customer.customer_id = 1 
        ORDER BY payments.transaction_id DESC 
        LIMIT 1";

// Execute the query
$result = $conn->query($sql);

// Check if the query execution was successful
//if (!$result) {
  //die("Query failed: " . $conn->error);
//}

// Display the latest inserted value
if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  //echo "Latest inserted order for customer with ID 1 is: Order ID - " . $row["order_id"] . ", Order Date - " . $row["order_date"] . ", Order Total - " . $row["delivery_date"];
}else{

}
?>


<div id="invoice-POS">
    
    <center id="top">
    <a href="try.php"><img src="image/csitlogo.png" width="100px" alt=""></a>
      <div class="info">
        <h2>Divine Word College of Legazpi</h2>
        <h2>CSITS Organization</h2>
        <h3>Official Receipt</h3>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="bot">
					<!--<div id="table">
						<table>
							<tr class="tabletitle" width="50%">
								<td class="item"><h3>Description</h3></td>
								<td class="Rate"><h3>Student Information</h3></td>
							</tr>
                    	</div>End Table-->      

<?php
  // retrieve the latest payment for the student


  if ($row) {
    // print out the student and payment information
    echo "Full Name: " . $row["student_name"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "Gender: " . $row["gender"] . "<br>";
    echo "Course: " . $row["course"] . "<br>";
    echo "Year: " . $row["year"] . "<br>";
    echo "Date paid: " . $row["date_paid"] . "<br>";
    echo "Amount: " . $row["amount"] . "<br>";
    //echo "No payments found for student";
  } else {
    // print out the student and payment information
    
  }
?>

							<!--<tr class="service"  width="100%">
								<td class="tableitem"><p class="itemtext">Date Paid</p></td>
								
								<td class="tableitem"><p class="itemtext">SY:2022-2023</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Semester</p></td>
								
								<td class="tableitem"><p class="itemtext">First Semester</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Fee Description</p></td>
								
								<td class="tableitem"><p class="itemtext">Membership Fee</p></td>
							</tr>

							<tr class="service">
								<td class="tableitem"><p class="itemtext">Payment Date</p></td>
								
								<td class="tableitem"><p class="itemtext">May 08 2023</p></td>
							</tr>

                            <tr class="tabletitle">
								<td class="item"><h1>Total</h1></td>
								<td class="rate"><h1>₱3,644</h1></td>
							</tr>
						</table>-->
                          

				

					<div id="legalcopy">
						<center>
                            <br><p><strong>CSITS | TREASURER</strong></p>
                        </center>
					</div>

				</div><!--End InvoiceBot-->

                <div style="text-align: center;">
        <a href="edit.php" class="edit-button">EDIT</a>
        <a href="viewall.php" class="view-all-button">HISTORY</a>
    </div>
  </div><!--End Invoice-->

  

</body>