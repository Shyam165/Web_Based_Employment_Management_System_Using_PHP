<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $fname = $_POST['fname'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $message = $_POST['message'];

   
        $query= "insert into Contact (fname, Email, Subject, message) values ('$fname', '$Email', '$Subject', '$message')";
        $result=mysqli_query($con, $query);
        if($result){
        echo "<script type='text/javascript'> alert('Successfully Send Message')</script>";
        }
        else {
  echo "<script type='text/javascript'> alert('Please enter some valid information')</script>";
        }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Contact us</title>
    <link rel="stylesheet" href="contact.css"> 
</head>

<body>
    <!-- <div class="progress"></div> -->
    <!-- Navbar container -->
	<div class="navbar">
		<!-- Left side navbar elements -->
		<div class="navbar-left">
			<a href="home_page1.php" class="active">Home</a>
			<a href="contact_us.php">Contact</a>
			<a href="about_us.php">About</a>
		</div>

		<!-- Right side navbar elements -->
		<div class="navbar-right">
			<a href="employee_list.php">Employment List</a>
			<a href="Add_emp.php">Create Employee</a>
			<a href="login.php">Login</a>
			<a href="sign.php">Sign Up</a>
		</div>
	</div>
    <div class="color">
        <div class="first">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_t1yo4z4b.json" background="transparent"
                speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
        </div>
        <div class="second">
            <br>
            <h1><u>Contact Us</u></h1>
            <p><b>Contact us to get started<br>and we promise to serve best</b>
                <br><br><br>
            </p>
        </div>
    </div>
    <div class="flex">
    <div class="container1">
       <div class="hover"> <div class="flex">
            <div class="margin"> <div class="hover"></div><img src="https://cdn-icons-png.flaticon.com/512/3082/3082383.png" alt="location"
                    width="50px" height="50px"></div>
            <div class="margin2">
                <h1>
                    Location:
                </h1>
                <p>A108 Adam Street, New York, NY 535022</p>
            </div>
        </div>
        </div>
        <div class="flex">
            <div class="margin"> <img src="https://cdn-icons-png.flaticon.com/512/646/646135.png" alt="location"
                    width="50px" height="50px"></div>
            <div>
                <h1>
                   E-Mail:
                </h1>
                <p>info@example.com</p>
            </div>
        </div>
        <div class="flex">
            <div class="margin"> <img src="https://cdn-icons-png.flaticon.com/512/126/126341.png" alt="location"
                    width="50px" height="50px"></div>
            <div>
                <h1>
                   Call:
                </h1>
                <p>+1 5589 55488 55s</p>
            </div>
        </div>
        <div class="mmargin">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" style="border: 10px; width: 100%; height: 290px;" ></iframe>
    </div></div>
    <div class="container2">
     <form method="POST"><div class="font">
        <div class="flex">
        <div class="flexx"> <label for="fname">Your Name:</label>
        <br>
        <input type="text" id="fname" class="form" name="fname"placeholder = "Your Name" size="25px"  style="height:40px;font-size:20px;text-align: center;"></div><br>
       <div class="flexx2"> <label for=" E-Mail">E-Mail:</label><br>
        <input type="text" id="Email" name="Email" placeholder="E-mail"  size="25px"  style="height:40px;font-size:20px; text-align: center;" ></div></div><br>
       <div class="mrgin"> <label for=" Subject">Subject:</label><br>
        <input type="text" id="Subject" name="Subject" placeholder="Subject" size="58px"  style="height:40px;font-size:20px;text-align: center;"><br>
        </div><br><div class="flexx3">
        <label for="message">Message:</label><br>
        <textarea name="message" rows="15" cols="86" id="message"></textarea><br></div>
        <div class="center">
        <input type="submit" value="Send Message"   class= "button" style="height:40px; width:150px ; background-color: orangered; color:white; font-size: large; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, ;" >
     </div></div></form>
    </div>
</div>
    </body>
</html>
