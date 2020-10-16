<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universitydb";

$conn=mysqli_connect('localhost','root','','universitydb');
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$dob = $_POST['dob']
$email = $_POST['email'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];

$sql = "INSERT INTO jobrequest (firstname, lastname,dob, email, password, confirm)
VALUES ('$firstname', '$lastname', '$dob', $email', $password,'$confirm')";

mysqli_query($conn,$sql);
echo "<h2>Submitted Successfully</h2>";
$conn->close();
?>