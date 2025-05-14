<?php
session_start();
require_once './../connect.php';

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register'])) {
    
    $firstname = htmlspecialchars(trim($_POST['firstname']));
    $lastname  = htmlspecialchars(trim($_POST['lastname']));
    $email     = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password  = trim($_POST['password']);

    if (empty($firstname) || empty($lastname) || empty($email)) {
        $_SESSION['message_error'] = "Please fill out all required fields.";
        header("Location: ./../register.php");
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message_error'] = "Invalid email address.";
        header("Location: ./../register.php");
        exit();
    }

    if (empty($password)) {
        $_SESSION['message_error'] = "Password is required.";
        header("Location: ./../register.php");
        exit();
    } elseif (strlen($password) < 6) {
        $_SESSION['message_error'] = "Password must be at least 6 characters.";
        header("Location: ./../register.php");
        exit();
    }

    // Hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email exists
    $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $_SESSION['message_error'] = "Email already registered.";
        $stmt->close();
        header("Location: ./../register.php");
        exit();
    }

    $stmt->close();

    // Insert user
    $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);

    if ($stmt->execute()) {
        $user_id = $stmt->insert_id; // Get the inserted user ID

        // Auto-login
        $_SESSION['user_id'] = $user_id;
        $_SESSION['email'] = $email;
        $_SESSION['message_success'] = "Registration successful and logged in!";

        $stmt->close();
        $conn->close();

        header("Location: ./../web.php"); 
        exit();
    } else {
        $_SESSION['message_error'] = "Registration failed. Please try again.";
        error_log("DB Error: " . $stmt->error);
        $stmt->close();
        $conn->close();
        header("Location: ./../register.php");
        exit();
    }
}
?>
