<?php
include "connect.php";
if(isset($_GET['deleteid'])){
    $employee_id=$_GET['deleteid'];

    $sql="delete from employees where employee_id=$employee_id";
    $result=mysqli_query($con,$sql);
    if($result){
      //  echo "Deleted successfully";
      header('location:employee_list.php');
    }else{
        die(mysqli_error($con));
    }
}
?>