<?php
include 'connect.php';

if(isset($_POST['submit'])){
    $emp_name=$_POST['name'];
    $age=$_POST['age'];
    $email_address=$_POST['email'];
    $department=$_POST['department'];
    $work_experience=$_POST['workexp'];
    $address=$_POST['address'];
    $contact_number=$_POST['contact'];

    $sql="INSERT INTO employees (emp_name, age, email_address, department, work_experience, address, contact_number) VALUES ('$emp_name', $age, '$email_address', '$department', $work_experience, '$address', $contact_number)";
    
    $result=mysqli_query($con, $sql);

    if($result) {
        // echo "Data inserted successfully";
        header('location:home_page1.php');
    } else {
        die(mysqli_error($con));
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fevicon3.png" type="image/png">
    <title>Adding New Employee</title>
    <link rel="stylesheet" href="create_emp.css"> 
</head>
<body>
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
    <div class="abc">
    <form method="post">
        <h1>Employee Management System</h1>
                <ul style="list-style: none;">
                   <li><label for="name">Name</label></li> 
                    <input class="empname"  id="name"  value="" type="text" placeholder="enter name" name="name" required>
                    <li><label for="age">Age</label></li>
                    <input class="empage" id="age" type="number" value=""  placeholder="enter age" name="age" required>
                    <li><label for="emaila">email address</label></li>
                    <input class="empemail" type="email" id="emaila" value="" placeholder="enter email address" name="email" required>
                    <li><label for="department">Department</label></li>
                    <input class="empdepartment" id="department" type="text" value="" required placeholder="enter department" name="department">
                    <li><label for="workexp">Work experience</label></li>
                   <input class="empexperience"  id="workexp" type="text" value="" required placeholder="enter your work experience" name="workexp">
                    <li><label for="address">Address</label></li>
                    <input class="empaddress"  id="address" type="text" value="" required placeholder="enter address" name="address">
                    <li><label for="contact">Contact Number</label></li>
                    <input class="empcontact" id="contact" type="number" value=""   required placeholder="enter contact number" name="contact"><br><br>
                    <button class="btn" type="submit" style="background-color: green;" value="Submit" name="submit">Submit</button>
                    <button class="btn" type="reset" style="background-color: red;" value="Reset" name="reset">Reset</button>
                </ul>
</form>
</div>
</body>
</html>