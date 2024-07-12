<?php
require_once('Files/function.php');

if (isset($_POST['Signup'])) {
    if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['password'])) {
        $first_name = trim($_POST['first_name']);
        $last_name = trim($_POST['last_name']);
        $email = trim($_POST['email']);
        $phone_number = trim($_POST['phone']);
        $password = trim($_POST['password']);
        $password_confirm = trim($_POST['password_1']);

        if ($password != $password_confirm) {
            die("Passwords did not match");
        }


        // Check if the email already exists
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            die("User email already exists");
        }

        // Insert new user into the database
        $sql = "INSERT INTO users (first_name, last_name, email, phone_number, password) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone_number, $password);
        //Using $stmt->bind_param("sssss", $first_name, $last_name, $email, $phone_number, $password) to bind parameters to the query. This helps prevent SQL injection attacks.

        
        if ($stmt->execute()) {
            echo "Account created successfully";
            
            
           // header('Location: account_orders.php');
            header('Location: sign_in.php');
            exit(); // make sure to stop execution after redirection
        } 
    }
}

        
        
    

