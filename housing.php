<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "universitydb";

$conn=mysqli_connect('localhost','root','','universitydb');
$firstname = $_POST['firstName'];
$lastname = $_POST['lastName'];
$city = $_POST['city'];
$country = $_POST['country'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
$yale = $_POST['yale'];
$size = $_POST['size'];
$date = $_POST['indate'];

$sql = "INSERT INTO housing (firstname, lastname, city, country, email, telephone, yale, size, indate)
VALUES ('$firstname', '$lastname', '$city',''$country','$email', '$telephone','$yale','$size','$date')";

mysqli_query($conn,$sql);


$conn->close();
?>