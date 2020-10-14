<?php
    include_once './dbh.inc.php';

    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $lanme = $_POST['lanme'];
    $gdyear = $_POST['gdyear'];
    $alum = $_POST['alum'];
    if(isset($_POST['cb1'])){
       $cb1 = $_POST['cb1'];
    }
    if(isset($_POST['cb2'])){
      $cb2 = $_POST['cb2'];
    }
     if(isset($_POST['cb3'])){
      $cb3 = $_POST['cb3'];
     }

    $receive='';


    if (!empty($cb1)) {
        $receive=$cb1;
    }else{
        $receive='0';
    }
    if (!empty($cb2)){
        $receive .= $cb2;
    }else{
        $receive.='0';
    }
    if (!empty($cb3)) {
        $receive .= $cb3;
    }else{
        $receive.='0';
    }

$sql = "INSERT INTO news (Email, FirstName, LastName, GraduationYear, Alum, Receive)
VALUES ('$email', '$fname', '$lanme',$gdyear,'$alum',$receive)";

mysqli_query($conn,$sql);

$conn->close();
?>