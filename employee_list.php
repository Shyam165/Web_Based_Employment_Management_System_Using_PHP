<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="fevicon1.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Display Employment Details</title>
    <style>
         body{
            background-image: url("https://cutewallpaper.org/21/office-background-wallpaper/business-office-background-images-Magdalene-project.org.jpg");
            background-size: cover;
        }
        .main{
            background-color:  rgb(0,0,0,0.2);;;
            text-decoration: underline;
            color: mediumblue;
        }
        h1:hover{
            color: green;
        }
        body>table {
            width: 80%;
        }

        table {
            border-collapse: collapse;
        }

        table.list {
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even),
        table.list thead>tr {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <div class="main">
    <h1 style="text-align: center;"> Employee Information</h1></div>
    <table class="list" id="employeeList">
        <thead>
            <tr><th>ID</th>
                <th>NAME</th>
                <th>AGE</th>
                <th>Email Address</th>
                <th>DEPARTMENT</th>
                <th>Work experience</th>
                <th>ADDRESS</th>
                <th>CONTACT</th>
                <th scope="col">Operations</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
  $sql="Select * from employees";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
        $employee_id=$row['employee_id'];
        $emp_name=$row['emp_name'];
        $age=$row['age'];
        $email_address=$row['email_address'];
        $department=$row['department'];
        $work_experience=$row['work_experience'];
        $address=$row['address'];
        $contact_number=$row['contact_number'];
        echo '<tr>
        <th scope="row">'.$employee_id.'</th>
        <td>'.$emp_name.'</td>
        <td>'.$age.'</td>
        <td>'.$email_address.'</td>
        <td>'.$department.'</td>
        <td>'.$work_experience.'</td>
        <td>'.$address.'</td>
        <td>'.$contact_number.'</td>
        <td>
    <button class="btn btn-primary"><a href="update.php? updateid='.$employee_id.'" class="text-light">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid='.$employee_id.'" class="text-light">Delete</a></button>
  </td>
      </tr>';
    }
  }
  ?>
        </tbody>
    </table>

</body>
</html>