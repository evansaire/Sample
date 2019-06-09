<?php
session_start();
include_once 'dbh.inc.php';
$firstname = $_POST['userfirstname'];
$lastname = $_POST['userlastname'];
$useremail = $_POST['useremail'];
$userpwd = $_POST['userpwd'];
$userrepwd = $_POST['userretypepwd'];

if (empty($firstname) || empty($lastname) || empty($useremail) || empty($userpwd) || empty($userrepwd) ) {
    header('Location:../index.html?emptyfield');
}elseif ($userpwd!=$userrepwd){
    $_SESSION['alertone']= "alertone";
    header('Location:../signup.php?');
    exit();
   
}elseif (preg_match("/^[1234567890]*$/",$userpwd) ||  preg_match("/^[a-zA-Z]*$/",$userpwd) || preg_match("/^[.,#@^&*+_!]*$/",$userpwd)) {
    $_SESSION['alerttwo']= "alertwo";
    // yet to create alert
   header('Location:../signup.php');
}
elseif (!preg_match("/^[a-zA-Z]*$/", $firstname)|| !preg_match("/^[a-zA-Z]*$/", $lastname)) {
    $_SESSION['alertthree']= "alertthree";
    // yet to create alert
    header('Location:../signup.php?');
}else{
    //select from databse
    $sql= "SELECT * FROM signin WHERE useremail = '$useremail'";
    $query= mysqli_query($connect,$sql);
    $checkquery=mysqli_num_rows($query);
     if($checkquery>0){
        $_SESSION['alertfour']= "alertfour";
        
       header('Location:../signup.php?');
       exit();
     }else{

        //Run ALL
    //Hatching Password
    $password=password_hash($userpwd, PASSWORD_DEFAULT);
    $sql = "INSERT INTO signin (firstname, lastname, useremail, userpwd) VALUES ('$firstname','$lastname','$useremail','$password')";
    mysqli_query($connect, $sql);
    $_SESSION['button']= "submit";
    header('Location:../signin.php');
    }
}