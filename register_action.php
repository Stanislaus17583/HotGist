<?php
include_once 'setup.php';
$err = 0;
$msg = '';

$name = clean('name');
$email = clean('email');
$password = clean('password');
$confirm_password = clean('confirm_password');
$phone = clean('phone');

$exist = $con->query("SELECT * from users WHERE email = '$email'");
if ($exist->num_rows> 0) {
    $err =1;
    $msg = 'Email already exists';
}


// This line checks to make sure all fields are entered
if ($name == '' || $email =='' || $password=='' || $phone =='') {
    $err = 1;
    $msg.= 'Please fill all fields <br>';
}

// To check if the two passwords are the same

if ($password != $confirm_password) {
    $err =1;
    $msg .= "<br> Passwords do not match";
}

$confirm_email =$con->query("SELECT id from users where email = '$email' ");
if ($confirm_email->num_rows> 0){
    $err =1;
    $msg = 'Email already exists <br>';
}

$password = sha1(md5($password));
if ($err == 0) {
    $insert =$con->query("INSERT into users (name, email, password, phone)
     VALUES('$name', '$email', '$password', '$phone')");
     if ($insert === true) {

        //  Login User Here
     } else {
         $mg .= "<br>Error".$con->error;
         header("location: login.php?msg=.$msg");
     }
     
}else {
    header("location: login.php?msg=.$msg");
}
?>