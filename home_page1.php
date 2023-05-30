<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Navbar</title>
	<link rel="stylesheet" href="home.css"> 
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
    <main>
        <section id="hero">
            <div class=" margin">
                <h1 style="color:aliceblue; font-size: 50px; z-index: 1;">Better digital experience<br> with Presento</h1>
                <p style="color: aliceblue ;font-size:35px; z-index: 1;">We are team of talented designers making websites<br> with
                    Bootstrap</p>
                    <form action="login.php" method="get">
                    <button>Get Started</button></form>
            </div>
        </section>
    </main>
    <footer>
        <p class="ft">&copy; 2023 Employment Management System. All rights reserved.</p>
    </footer>
</body>
</html>