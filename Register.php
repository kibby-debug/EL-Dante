<?php
include "db.php"; 

$FullName=$_POST["FullName"];
$Email =$_POST["Email"];
$Interest =$_POST["Interest"];
$Password =$_POST["Password"];
$ConfirmPassword =$_POST["ConfirmPassword"];

if ($Password != $ConfirmPassword) {

    die("Passwords do not match!");
}

$sql ="INSERT INTO user 
(FullName,Email,Interest,Password,ConfirmPassword) 
VALUES
('$FullName','$Email','$Interest','$Password','$ConfirmPassword')";
if (mysqli_query($conn,$sql))   {
    echo "Registration Successful";
    echo header('Location: Login.html');
} else {
    echo "Error:" . mysqli_error ($conn);
}

 

?>