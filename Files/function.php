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