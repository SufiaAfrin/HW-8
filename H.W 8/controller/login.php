<?php
session_start();
include "../database/env.php";


$email = $_REQUEST['email'];
$pass = $_REQUEST['pass'];
$errors = [];

if(empty($email)){
    $errors['email_error'] = "Email is required";
}
if(empty($pass)){
    $errors['pass_error'] = "Password is required";
}

if(count($errors) > 0){
    $_SESSION['past'] = $_REQUEST;
   
    //redirection
    $_SESSION['form_errors'] = $errors;
    header("Location: ../index.php");
}else{
    $query = "INSERT INTO `informations`(email, password) VALUES ('$email', '$pass')";

    $result = mysqli_query($conn, $query);
    
    if($result){
        $_SESSION['msg'] = "Your data has been inserted";
        header("Location: ../index.php");
    }

}
