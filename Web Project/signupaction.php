<?php 
$con = mysqli_connect("localhost","root","","usersdb");

$email = $_POST['name'];
$password = $_POST['password'];
$sql = "INSERT INTO users (db_email,db_password) VALUES ('$name','$password')";
$result = mysqli_query($con,$sql);
   

?>