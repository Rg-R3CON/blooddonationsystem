<?php

$sname= "localhost";
$uname= "root";
$password= "";

$db_name = "blood";
$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
    echo "connection failed";
}
?>

<!-- 5)make blood donation registeration system.(form fields are name ,address,bgroup,phonenumber,date / display registered users details / provide delete and edit button for each entries / provide validate for each fields) -->
