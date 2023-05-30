<?php

$con=new mysqli('localhost', 'root', '', 'employment');

if(!$con){
    die(mysqli_error($con));
}
?>