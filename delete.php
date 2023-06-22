<?php
include 'conn.php';
 $id = $_GET['id'];

    echo "$id";
    $sql = "delete from donor where id='$id'";

    $result= mysqli_query($conn, $sql);
    if($result){
        header('location:display.php');
    }





?>