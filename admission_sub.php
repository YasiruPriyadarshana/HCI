<?php
    include_once './dbh.inc.php';


    $fname = $_POST['fname'];
    $lanme = $_POST['lanme'];
    $email = $_POST['email'];
    $bdate = $_POST['bdate'];




$sql = "INSERT INTO admission (FirstName, LastName, Email, BirthDate)
VALUES ( '$fname', '$lanme', '$email',$bdate)";

mysqli_query($conn,$sql);
header("Location: ../YaleUniversity/Admission.html?Submit=success");
$conn->close();
?>