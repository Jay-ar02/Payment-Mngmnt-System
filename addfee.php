<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Create Fee Details</title>

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
      <form method="POST" action="fee_func.php">

        <center><img src="image/csitlogo.png" width="100px" alt=""></center>
        <center><h3>Create Fee</h3></center><br>
    
        <div class="neymm">

        <label>School Year</label>
        <input type="text" name="school_year" placeholder="Ex. SY: 2022-2023" required>
        
        
        <label>Semester</label>
        <input type="text" name="semester" placeholder="Ex. 1st Semester" required>
        
        <!--<label>Semester</label>
            <select name="semester">
                <option value="1st Semester">1st Semester</option>
                <option value="2st Semester">2nd Semester</option>
            </select>-->

        <label>Fee Description</label>
        <input type="text" name="fee" placeholder="Ex. Membership Fee" required>
        
        <label>Due Date</label>
        <input type="date" name="due_date" pattern="\d{4}-\d{2}-\d{2}" required>

        <label>Amount</label>
        <input type="text" name="amount" placeholder="Type the total amount" required>
        
        </div>
        <div class="inp-group">
        
        <button type="submit" id="submit-btn" name="save">Save </button>
      </form>
</body>
</html>