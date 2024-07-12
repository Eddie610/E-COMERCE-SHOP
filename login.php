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


// Initialize variables
$email = '';
$password = '';

// function for login
function login_user($email,$password){
    global $conn;
   
    $sql = "SELECT * FROM users WHERE email = ? && paasword= ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email,$password);
    $stmt->execute();
    $result = $stmt->get_result();
if($result->num_rows<1){
    return false;
}
$row=$result->fetch_assoc();
if (!password_verify($password,$row['password'])){
    return false;
}
   $_SESSION ['user']=$row;
   return true;
}  


if (isset($_POST['Sign_in'])) {
    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $email_2 = trim($_POST['email']);
        $password_2 = trim($_POST['password']);
    }
}

if (!empty($email_2) && !empty($password_2)) {
    if (login_user($email, $password)) {
        die('Successfully Logged in');
    } else {
        die('Failed to login, Check: Email or password is wrong');
    }
}/*  else {
    die('Please enter both email and password');
} */
