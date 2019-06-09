<?php
session_start();
include_once 'dbh.inc.php';

$useremail = $_POST['useremail'];
$userpwd = $_POST['userpwd'];

if (empty($useremail) || empty($userpwd)) {
    header('Location:../signup.php?emptyfie ld');
}else{

    $sql= "SELECT * FROM signin WHERE useremail = '$useremail'";
    $query= mysqli_query($connect,$sql);
    $checkquery=mysqli_num_rows($query);

       
    if($checkquery<1){
        $_SESSION['alertfive']= "alertfive";
        header('Location:../signin.php?');
       exit();
    }else {
      if ($row=mysqli_fetch_assoc($query)){
        // Dehashing password
         $UnhatchedPwd=password_verify($userpwd, $row['userpwd']);

         if($UnhatchedPwd==false){
         $_SESSION['alertsix']= "alertsix";
         header('Location:../signin.php?');
         
    }elseif ($UnhatchedPwd==true) {
        $_SESSION['alertseven']= "alertseven"; //session for alert

        $_SESSION['u_id'] = $row['id'];
        $_SESSION['u_first'] = $row['firstname'];
        $_SESSION['u_last'] = $row['lastname'];
        $_SESSION['u_email'] = $row['useremail'];
        $_SESSION['u_pass'] = $row['userpwd'];

        header('Location:../profile.php?');
    }

        
     }
    }
}