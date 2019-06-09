<?php
session_start();
include_once 'includes/dbh.inc.php';
if(!$_SESSION['u_email']){
    header('Location:signin.php');
    exit();
}


$sql= "SELECT * FROM signin";
    $query= mysqli_query($connect,$sql);
    $checkquery = mysqli_num_rows($query);
    $row = mysqli_fetch_assoc($query);
    echo $_SESSION['u_email'];
    echo"<br>";
    echo $_SESSION['u_first'];
    echo "<br>";
    echo $_SESSION['u_last'];
    


