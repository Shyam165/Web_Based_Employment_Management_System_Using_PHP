<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query= "insert into form (fname, lname, email, password, cpassword) values ('$firstname', '$lastname', '$email', '$password', '$cpassword')";
        mysqli_query($con, $query);
        echo "<script type='text/javascript'> alert('Successfully Register')</script>";
    }
    else
    {
        echo "<script type='text/javascript'> alert('Please enter some valid information')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css1.css"> -->
    <title>Sign Up Form</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("https://cutewallpaper.org/21/office-background-wallpaper/business-office-background-images-Magdalene-project.org.jpg");
            /* background-image: url("https://www.teahub.io/photos/full/22-227240_high-resolution-office-background.jpg"); */
            background-size: cover;
        }

        h1 {
            text-decoration: underline;
        }

        h1:hover {
            color: red;
        }

        .container_sg {
            background-color: rgb(0, 0, 0, 0.2);
            ;
            ;
            text-align: center;
            width: 33%;
            position: relative;
            left: 500px;
            height: 80vh;
            border-radius: 10px;
            margin-top: 20px;
        }

        .button_width {
            border: 2px solid red;
            border-radius: 17px;
            text-align: center;
            width: 9vw;
            height: 30px;

        }

        .border {
            border: 2px solid red;
            border-radius: 5px;
            text-align: center;
            width: 20vw;
            height: 28px;
        }
    </style>
</head>

<body>
    <!-- <center> -->
    <div class="container_sg">
        <form  method="POST">
            <h1> Sign Up Form</h1><br>
            <p><label for="firstn">First Name</label></p>
            <input class="border" type="text" id="firstn" name="fname" required placeholder="enter your name"><br><br>
            <p><label for="lastn">Last Name</label></p>
            <input class="border" type="text" id="lastn" name="lname" required placeholder="enter your last name"><br><br>
            <p><label for="emaila">Email Address</label></p>
            <input class="border" type="email" id="emaila" name="email" required placeholder="enter your email address"><br><br>
            <p><label for="password">Password</label></p>
            <input class="border" type="password" id="password" name="password" required placeholder="enter your password"><br><br>
            <p><label for="passwordc">Confirm Password</label></p>
            <input class="border" type="password" id="passwordc" name="cpassword" required placeholder="enter same password"><br><br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> I accept the Terms of Use & Privacy Policy
            </label><br><br>
            <!-- <button class="button_width" onclick="document.location='home_page.html'" style="background-color:green">Sign Up</button> -->
            <input class="button_width" type="submit" style="background-color:green" value="Sign Up">
            <input class="button_width" type="reset" value="Reset" style="background-color: red"><br><br>
            <p>Already have an account? <a href="login.php" target="_blank">Login here</a></p>
        </form><br>
    </div>
    <!-- </center> -->
</body>

</html>