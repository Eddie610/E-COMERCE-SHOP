<?php




    if (isset($_POST['Signup'])) {
        if (!empty($_POST['first_name'] && $_POST['last_name'] && $_POST['email'] && $_POST['phone'] && $_POST['password'])) {
            $first_name = trim($_POST['first_name']);
            $last_name = trim($_POST['last_name']);
            $email = trim($_POST['email']);
            $phone_number = trim($_POST['phone']);
            $password = trim($_POST['password']);
            $password_confirm = trim($_POST['password_1']);
    
           
        
    
            if ($password != $password_confirm) {
                die("passwords didnot match");
            }
           
    
            
            $sql = "SELECT*FROM users WHERE email ='$email'";
            $stmt=$conn->prepare($sql);
            $stmt->execute();
            $res = $stmt->get_result();
    
            if ($res->num_rows > 0) {
                die("User email already exists");
                
            }
    
    
            $sql = 
                
                "INSERT INTO  
    users (first_name,last_name,email,phone_number,password) 
    VALUES ( '$first_name', '$last_name','$email',' $phone_number','$password')"
            ;
            $stmt = $conn->prepare($sql)
                or
                die(mysqli_error($conn));
        }
    
    if($stmt->execute()){
    
        //echo "Account created successfully";
        login_user($email,$password);
        header('Location:account_orders.php'); 
        
    }
    else{
        die('Failed to create account');
         
    }
    }
    