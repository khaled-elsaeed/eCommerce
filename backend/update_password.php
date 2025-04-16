<?php
session_start();
require_once 'db_connect.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = "You must be logged in to change your password";
    header('Location: ../login-register.php');
    exit();
}

// Process form submission
if (isset($_POST['update_password'])) {
    $current_password = $_POST['current_password'] ?? '';
    $new_password = $_POST['new_password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';
    $user_id = $_SESSION['user_id'];
    
    // Validate inputs
    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        $_SESSION['error'] = "All password fields are required";
        header('Location: ../my-account.php');
        exit();
    }
    
    if ($new_password !== $confirm_password) {
        $_SESSION['error'] = "New password and confirmation do not match";
        header('Location: ../my-account.php');
        exit();
    }
    
    try {
        // Get current password from database
        $stmt = $pdo->prepare("SELECT password FROM users WHERE id = :user_id");
        $stmt->bindParam(':user_id', $user_id);
        $stmt->execute();
        
        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            // Verify current password
            if (password_verify($current_password, $user['password'])) {
                // Hash new password
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                
                // Update password
                $update_stmt = $pdo->prepare("UPDATE users SET password = :password WHERE id = :user_id");
                $update_stmt->bindParam(':password', $hashed_password);
                $update_stmt->bindParam(':user_id', $user_id);
                $update_stmt->execute();
                
                $_SESSION['success'] = "Your password has been updated successfully";
            } else {
                $_SESSION['error'] = "Current password is incorrect";
            }
        } else {
            $_SESSION['error'] = "User not found";
        }
    } catch(PDOException $e) {
        $_SESSION['error'] = "Error updating password: " . $e->getMessage();
    }
    
    header('Location: ../my-account.php');
    exit();
}
?> 