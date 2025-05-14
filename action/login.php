<?php
session_start();
require_once './../connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    // Sanitize inputs
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);

    // Validate
    if (empty($email) || empty($password)) {
        $_SESSION['message_error'] = "Email and password are required.";
        header("Location: ./../index.php");
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message_error'] = "Invalid email format.";
        header("Location: ./../index.php");
        exit();
    }

    // Fetch user from DB
    $stmt = $conn->prepare("SELECT user_id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    // Check if user exists
    if ($stmt->num_rows === 1) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $user_id;
            $_SESSION['email'] = $email;
            $_SESSION['message_success'] = "Login successful!";
            header("Location: ./../web.php"); 
            exit();
        } else {
            $_SESSION['message_error'] = "Incorrect password.";
            header("Location: ./../index.php");
            exit();
        }
    } else {
        $_SESSION['message_error'] = "Email not found.";
        header("Location: ./../index.php");
        exit();
    }

    $stmt->close();
    $conn->close();
}
?>
