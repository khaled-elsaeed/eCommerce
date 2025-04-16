<?php
session_start();
require_once 'db_connect.php';

// Login functionality
if(isset($_POST['login-submit'])){
    $username = $_POST['user-name'];
    $password = $_POST['user-password'];

    try {
        // Prepare and execute query
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        if($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            // Verify password
            if(password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header('Location: ../my-account.php');
                exit();
            } else {
                $_SESSION['error'] = "Invalid username or password";
                header('Location: ../login-register.php');
                exit();
            }
        } else {
            $_SESSION['error'] = "Invalid username or password";
            header('Location: ../login-register.php');
            exit();
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = "Error: " . $e->getMessage();
        header('Location: ../login-register.php');
        exit();
    }
}

// Registration functionality
if(isset($_POST['register-submit'])){
    $username = $_POST['user-name'];
    $password = $_POST['user-password'];
    $email = $_POST['user-email'] ?? '';
    
    // Validate inputs
    if(empty($username) || empty($password)) {
        $_SESSION['reg_error'] = "Username and password are required";
        header('Location: ../login-register.php');
        exit();
    }
    
    try {
        // Check if username already exists
        $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        
        if($stmt->rowCount() > 0) {
            $_SESSION['reg_error'] = "Username already exists";
            header('Location: ../login-register.php');
            exit();
        } else {
            // Hash password
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            
            // Insert new user
            $stmt = $pdo->prepare("INSERT INTO users (username, password, email) VALUES (:username, :password, :email)");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $hashed_password);
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            
            // Get the new user ID
            $user_id = $pdo->lastInsertId();
            
            // Set session variables
            $_SESSION['user_id'] = $user_id;
            $_SESSION['username'] = $username;
            header('Location: ../my-account.php');
            exit();
        }
    } catch(PDOException $e) {
        $_SESSION['reg_error'] = "Error: " . $e->getMessage();
        header('Location: ../login-register.php');
        exit();
    }
}
?>