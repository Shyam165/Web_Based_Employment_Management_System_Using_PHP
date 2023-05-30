<?php
session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $newPassword = $_POST['new_password'];
    $c_password = $_POST['cpassword'];

    if (!empty($email) && !empty($newPassword) && !is_numeric($email)) {
        $query = "UPDATE form SET password = '$newPassword', cpassword = '$c_password' WHERE email = '$email'";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "<script type='text/javascript'>alert('Password updated successfully')</script>";
            // Redirect to login page or any other desired page
            header("Location: login.php");
            exit();
        } else {
            echo "<script type='text/javascript'>alert('Error updating password')</script>";
        }
    } else {
        echo "<script type='text/javascript'>alert('Invalid email or new password')</script>";
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
            height: 60vh;
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
            <h1>Reset Password</h1><br>
            <p><label for="emaila">Email Address</label></p>
            <input class="border" type="email" id="email" name="email" required placeholder="enter your email address"><br><br>
            <p><label for="password"> New Password</label></p>
            <input class="border" type="password" id="new_password" name="new_password" required placeholder="enter your password" ><br><br>
            <p><label for="passwordc">Confirm New Password</label></p>
            <input class="border" type="password" id="cpassword" name="cpassword" required placeholder="enter same password"><br><br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> I accept the Terms of Use & Privacy Policy
            </label><br><br>
            <!-- <button class="button_width" onclick="document.location='home_page.html'" style="background-color:green">Sign Up</button> -->
            <input class="button_width" type="submit" style="background-color:green" value="Update">
            <input class="button_width" type="reset" value="Reset" style="background-color: red"><br><br>
            <p>Already have an account? <a href="login.php" target="_blank">Login here</a></p>
        </form><br>
    </div>
    <!-- </center> -->
</body>

</html>