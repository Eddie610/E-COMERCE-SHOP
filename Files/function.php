<?php
if (session_status()==PHP_SESSION_NONE){
session_start();
}
$conn=new mysqli('localhost','root','','e-comerce shop');

/* function login_user($email,$password){
    global $conn;
    $sql = "SELECT*FROM users WHERE email ='$email' ";
    $res = $conn->query($sql);
if($res->num_rows<1){
    return false;
}
$row=$res->fetch_assoc();
if (!password_verify($password,$row['password'])){
    return false;
}
   $_SESSION ['user']=$row;
   return true;
}   */

function login_user($email, $password) {
    global $conn;
   /*  $sql = "SELECT*FROM users WHERE email ='$email' ";
    $res = $conn->query($sql); */
    $sql = "SELECT * FROM users WHERE email = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
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