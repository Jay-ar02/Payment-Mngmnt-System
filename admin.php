<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="icon" type="image/x-icon" href="image/csit.png">
</head>

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
    }

    :root {
        --background-color1: #fafaff;
        --background-color2: #ffffff;
        --background-color3: #ededed;
        --background-color4: #dfe0e4a4;
        --primary-color: #4b49ac;
        --secondary-color: #0c007d;
        --Border-color: #3f0097;
        --one-use-color: #3f0097;
        --two-use-color: #781d1d;
    }

    body {
        background: linear-gradient(135deg, #05073a, #dc0606ca);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    }

    header {
        height: 70px;
        width: 100vw;
        padding: 0 30px;
        background-color: var(--two-use-color);
        position: fixed;
        z-index: 100;
        box-shadow: 1px 1px 15px rgba(161, 182, 253, 0.825);
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .logo {
        font-size: 27px;
        font-weight: 600;
        color: rgb(255 255 255);
    }

    .icn {
        height: 30px;
    }

    .menuicn {
        cursor: pointer;
    }

    .searchbar,
    .message,
    .logosec {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .searchbar2 {
        display: none;
    }

    .logosec {
        gap: 60px;
    }

    .dp {
        height: 40px;
        width: 40px;
        background-color: #626262;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }

    .main-container {
        display: flex;
        width: 100vw;
        position: relative;
        top: 70px;
        z-index: 1;
    }

    .dpicn {
        height: 42px;
    }

    .main {
        height: calc(100vh - 70px);
        width: 100%;
        overflow-y: scroll;
        overflow-x: hidden;
        padding: 40px 30px 30px 30px;
    }

    .main::-webkit-scrollbar-thumb {
        background-image: linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
    }

    .main::-webkit-scrollbar {
        width: 5px;
    }

    .main::-webkit-scrollbar-track {
        background-color: #9e9e9eb2;
    }

    .btn {
        display: flex;
        justify-content: flex-end;
        margin-bottom: 20px;
    }

    button {
        background: var(--primary-color);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 18px;
        font-weight: 500;
        letter-spacing: 1px;
        cursor: pointer;
        transition: background 0.3s ease;
    }

    button:hover {
        background: linear-gradient(135deg, #05073a, #dc0606ca);
    }

    .box-container {
        display: flex;
        justify-content: space-evenly;
        align-items: center;
        flex-wrap: wrap;
        gap: 30px;
    }

    .box {
        height: 160px;
        width: 280px;
        background-color: var(--one-use-color);
        border-radius: 20px;
        box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        cursor: pointer;
        transition: transform 0.3s ease-in-out;
    }

    .box:hover {
        transform: scale(1.05);
    }

    .box:nth-child(2n) {
        background-color: var(--two-use-color);
    }

    .box img {
        height: 50px;
    }

    .topic-heading {
        font-size: 22px;
        font-weight: 600;
        color: white;
        margin-top: 10px;
    }

    .topic {
        font-size: 16px;
        font-weight: 400;
        letter-spacing: 1px;
        color: white;
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
    <!-- Header -->
    <header>
        <div class="logosec">
            <div class="logo">CSITS Organization</div>
        </div>
        <div class="message">
            <div class="circle"></div>
            <div class="dp">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"class="dpicn" alt="dp">
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-container">
        <div class="main">
        <div style="text-align: center;">
        <a href="addfee.php" class="edit-button">ADD FEE</a><br><br><br><br>
    </div>
            <div class="box-container">
                <div class="box">
                    <div class="text">
                        <h2 class="topic-heading">Membership Fee</h2>
                        <h2 class="topic">₱250</h2>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <h2 class="topic-heading">Acquaintance Party</h2>
                        <h2 class="topic">₱1000</h2>
                    </div>
                </div>
                <div class="box">
                    <div class="text">
                        <h2 class="topic-heading">Kickoff Party</h2>
                        <h2 class="topic">₱1.5k</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./index.js"></script>
</body>

</html>
