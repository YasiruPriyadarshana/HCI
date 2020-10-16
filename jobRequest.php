<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universitydb";

$conn=mysqli_connect('localhost','root','','universitydb');
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$faculty = $_POST['faculty'];
$jobtype = $_POST['jobtype'];
$jobtitle = $_POST['jobtitle'];
$date = $_POST['date'];

$sql = "INSERT INTO jobrequest (firstname, lastname, email, phone, faculty, jobtype, jobtitle, date)
VALUES ('$firstname', '$lastname', '$email',$phone,'$faculty', '$jobtype','$jobtitle','$date')";

mysqli_query($conn,$sql);

echo "<script type='text/javascript'>alert('Submitted Successfully !!')</script>";
$conn->close();
?>