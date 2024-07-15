<?php
/* require_once "Files/function.php";


if (isset($_POST['Sign_in'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        
        $email = trim($_POST['email']);
       
        $password = trim($_POST['password']);
        
    }
}

if(login_user($email, $password)){

    die('Succesfully Loged_in');
}
else{
    die('Failed to login, Check:Email or password is wrong');
}


<?php */


require_once "Files/function.php";

session_start(); // Start session if not already started
// Initialize variables
/* $email = '';
$password = ''; */

// function for login



if (isset($_POST['Sign_in'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email_2= trim($_POST['email']);
        $password_2= trim($_POST['password']);
    }
}

    if (login_user($email_2, $password_2)) {
        die('Successfully Logged in');
    } else {
        die('Failed to login, Check: Email or password is wrong');
    }
/*  else {
    die('Please enter both email and password');
} */

