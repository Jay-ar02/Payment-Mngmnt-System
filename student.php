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

form select{
  width: 103%;
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
  <br>
  <br>
  <form method="POST" action="student_func.php">
        <center><img src="image/csitlogo.png" width="100px" alt=""></center>
        <center><h3>Student Fee</h3></center><br>

        <div class="neymm">
            <label for="full_name">Full Name</label>
            <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" required>

            <label for="email">School Email</label>
            <input type="text" id="email" name="email" placeholder="Enter your school provided email" required>

            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
            <option value="-">-</option>
                <option value="MALE">MALE</option>
                <option value="FEMALE">FEMALE</option>
                <option value="OTHER">OTHER</option>
            </select>

            <label for="course">Course</label>
            <select id="course" name="course" required>
            <option value="-">-</option>
                <option value="BSIT">BSIT</option>
                <option value="BSCS">BSCS</option>
                <option value="OTHER">OTHER</option>
            </select>

            <label for="year">Year Level</label>
            <select id="year" name="year" required>
            <option value="-">-</option>
                <option value="1ST YEAR">1ST YEAR</option>
                <option value="2ND YEAR">2ND YEAR</option>
                <option value="3RD YEAR">3RD YEAR</option>
                <option value="4TH YEAR">4TH YEAR</option>
            </select>

            <label for="paid_date">Date Paid</label>
            <input type="date" id="paid_date" name="paid_date" required>

            <label for="amount">Amount</label>
            <input type="text" id="amount" name="amount" placeholder="Type the total amount" required>
        </div>

        <div class="inp-group">
            <button type="submit" id="submit-btn" name="pay">Pay</button>
        </div>
    </form>

</body>
</html>