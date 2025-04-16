<?php
session_start();
require_once 'db_connect.php';

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    $_SESSION['error'] = "You must be logged in to update your account information";
    header('Location: ../login-register.php');
    exit();
}

// Process form submission
if (isset($_POST['update_account'])) {
    $first_name = $_POST['first_name'] ?? '';
    $last_name = $_POST['last_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $telephone = $_POST['telephone'] ?? '';
    $fax = $_POST['fax'] ?? '';
    $user_id = $_SESSION['user_id'];

    try {
        // Update user information
        $stmt = $pdo->prepare("
            UPDATE users 
            SET first_name = :first_name, 
                last_name = :last_name, 
                email = :email, 
                telephone = :telephone, 
                fax = :fax 
            WHERE id = :user_id
        ");
        
        $stmt->bindParam(':first_name', $first_name);
        $stmt->bindParam(':last_name', $last_name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':telephone', $telephone);
        $stmt->bindParam(':fax', $fax);
        $stmt->bindParam(':user_id', $user_id);
        
        $stmt->execute();
        
        // Update session data
        $_SESSION['first_name'] = $first_name;
        $_SESSION['last_name'] = $last_name;
        $_SESSION['email'] = $email;
        $_SESSION['telephone'] = $telephone;
        $_SESSION['fax'] = $fax;
        
        $_SESSION['success'] = "Your account information has been updated successfully";
    } catch(PDOException $e) {
        $_SESSION['error'] = "Error updating account information: " . $e->getMessage();
    }
    
    header('Location: ../my-account.php');
    exit();
}
?> 