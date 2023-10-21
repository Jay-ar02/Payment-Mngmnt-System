<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible"
		content="IE=edge">
	<meta name="viewport"
		content="width=device-width,
				initial-scale=1.0">
	<title>Student Dashboard</title>
	<link rel="stylesheet"
		href="style.css">
	<link rel="stylesheet"
		href="responsive.css">
</head>
<style>

@import url(
"https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

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
    background-color: var(--background-color4);
    max-width: 100%;
    overflow-x: hidden;
    }

    header {
    height: 70px;
    width: 100vw;
    padding: 0 30px;
    background-color: var(--background-color1);
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
    color: rgb(134, 31, 31);
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

    .searchbar input {
    width: 250px;
    height: 42px;
    border-radius: 50px 0 0 50px;
    background-color: var(--background-color3);
    padding: 0 20px;
    font-size: 15px;
    outline: none;
    border: none;
    }
    .searchbtn {
    width: 50px;
    height: 42px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 0px 50px 50px 0px;
    background-color: var(--secondary-color);
    cursor: pointer;
    }

    .message {
    gap: 40px;
    position: relative;
    cursor: pointer;
    }
    .circle {
    height: 7px;
    width: 7px;
    position: absolute;
    background-color: #fa7bb4;
    border-radius: 50%;
    left: 19px;
    top: 8px;
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
    background-image:
            linear-gradient(to bottom, rgb(0, 0, 85), rgb(0, 0, 50));
    }
    .main::-webkit-scrollbar {
    width: 5px;
    }
    .main::-webkit-scrollbar-track {
    background-color: #9e9e9eb2;
    }

    .box-container {
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    flex-wrap: wrap;
    gap: 50px;
    }
    .nav {
    min-height: 91vh;
    width: 250px;
    background-color: var(--background-color2);
    position: absolute;
    top: 0px;
    left: 00;
    box-shadow: 1px 1px 10px rgba(198, 189, 248, 0.825);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow: hidden;
    padding: 30px 0 20px 10px;
    }
    .navcontainer {
    height: calc(100vh - 70px);
    width: 250px;
    position: relative;
    overflow-y: scroll;
    overflow-x: hidden;
    transition: all 0.5s ease-in-out;
    }
    .navcontainer::-webkit-scrollbar {
    display: none;
    }
    .navclose {
    width: 80px;
    }
    .nav-option {
    width: 250px;
    height: 60px;
    display: flex;
    align-items: center;
    padding: 0 30px 0 20px;
    gap: 20px;
    transition: all 0.1s ease-in-out;
    }
    .nav-option:hover {
    border-left: 5px solid #a2a2a2;
    background-color: #dadada;
    cursor: pointer;
    }
    .nav-img {
    height: 30px;
    }

    .nav-upper-options {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 30px;
    }

    .option1 {
    border-left: 5px solid #010058af;
    background-color: var(--Border-color);
    color: white;
    cursor: pointer;
    }
    .option1:hover {
    border-left: 5px solid #010058af;
    background-color: var(--Border-color);
    }
    .box {
    height: 130px;
    width: 230px;
    border-radius: 20px;
    box-shadow: 3px 3px 10px rgba(0, 30, 87, 0.751);
    padding: 20px;
    display: flex;
    align-items: center;
    justify-content: space-around;
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    }
    .box:hover {
    transform: scale(1.08);
    }

    .box:nth-child(1) {
    background-color: var(--one-use-color);
    }
    .box:nth-child(2) {
    background-color: var(--two-use-color);
    }
    .box:nth-child(3) {
    background-color: var(--one-use-color);
    }
    .box:nth-child(4) {
    background-color: var(--two-use-color);
    }

    .box img {
    height: 50px;
    }
    .box .text {
    color: white;
    }
    .topic {
    font-size: 13px;
    font-weight: 400;
    letter-spacing: 1px;
    text-decoration: none;
    }

    .topic-heading {
    font-size: 30px;
    letter-spacing: 3px;
    }
    h2 a {
        color: white;
    }
</style>
<body>

	<!-- for header part -->
	<header>

		<div class="logosec">
			<div class="logo">CSITS Organization</div>
		</div>

		<div class="message">
			<div class="dp">
			<img src="image/csitlogo.png"
				class="dpicn"
				alt="dp">
			</div>
		</div>
        <!--https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png-->

	</header>

	<div class="main-container">
		<div class="navcontainer">
			<nav class="nav">
				<div class="nav-upper-options">
					<div class="nav-option option1">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
							class="nav-img"
							alt="dashboard">
						<h3> Student Dashboard</h3>
					</div>

					<!--<div class="option2 nav-option">
						<img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
							class="nav-img"
							alt="articles">
						<h3> Payment</h3>
					</div>-->

				</div>
			</nav>
		</div>
		<div class="main">

			

			<div class="box-container">

				<div class="box box1">
					<div class="text">
						<h2 class="topic-heading">250</h2>
						<h2 class="topic"><a href="student.php">Membership Fee</a></h2>
					</div>	
				</div>

				<div class="box box2">
					<div class="text">
						<h2 class="topic-heading">500</h2>
						<h2 class="topic"><a href="student.php">Acquaintance Party</a></h2>
					</div>
				</div>

				<div class="box box3">
					<div class="text">
						<h2 class="topic-heading">750</h2>
						<h2 class="topic"><a href="student.php">Kickoff Party</a></h2>
					</div>
				</div>

				
			</div>

			
		</div>
	</div>

	<script src="./index.js"></script>
</body>
</html>
