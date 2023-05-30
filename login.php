<?php
session_start();
include("db.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query="select * from form where email = '$email' limit 1";
        $result= mysqli_query($con, $query);

        if($result){
            if($result && mysqli_num_rows($result)> 0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['password'] == $password){
                    header("location:home_page1.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript'> alert('wrong username or password')</script>";
    }
    else{
    echo "<script type='text/javascript'> alert('wrong username or password')</script>";
}
}
// echo '
// <button ><a href="up.php? updateid='.$id.'"  style="color: red">forgot password</a></button><br><br>';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fevicon1.png" type="image/png">
    <link rel="stylesheet" href="css1.css">
    <title>Login and Signup form</title>
    <style>
        h1{
            text-decoration: underline;
        }
        h1:hover{
            color:blueviolet
        }
        .border{
            border-bottom: 2px solid black;
        }
        ::placeholder{
            color:black;
            /* font-size: medium; */
        }
    </style>
</head>


<body style="background-color:powderblue">
    <div class="container_lg" >
        <form class="form_lg_sg" method="POST">

            <img class="img1" src="emp.webp" alt="Avatar" width="300"><br>
            <h1><b>Login form</b></h1><br>
           <!-- <p> <label for="emaila">Email Address</label></p> -->
            <input class="border" type="email" id="emaila" name="email" placeholder="enter email address" autocomplete="off" required><br><br>
            <!-- <p><label for="password">Password</label></p> -->
            <input class="border" id="password" type="password" name="password" required autocomplete="off"  placeholder="enter your password"><br><br>
        <a href="forgot_password.php" style="color: red">Forgot password?</a><br><br>
            <!-- <button class="button_width" onclick="document.location='/sign.html'" style="background-color:green;">Login</button><br><br> -->
            <input class="button_width_login" type="submit" style="background-color:green" value="Login" target="_blank"><br><br>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label><br><br>
            <p>Not a member? <a href="sign.php" target="_blank" style="color:red">Sign up now</a></p>
        </form>

    </div>
</body>
</html>