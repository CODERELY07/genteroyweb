<?php
session_start();
require_once './../connect.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    
    // Sanitize input
    $name   = htmlspecialchars(trim($_POST['name']));
    $email  = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $number = trim($_POST['number']);
    $date   = trim($_POST['date']);

 
    if (empty($name) || empty($email) || empty($number) || empty($date)) {
        $_SESSION['message_error'] = "All fields are required.";
        header("Location: ./../index.php#book"); 
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['message_error'] = "Invalid email format.";
        header("Location: ./../index.php#book");
        exit();
    }

    if (!is_numeric($number) || strlen($number) < 6) {
        $_SESSION['message_error'] = "Invalid phone number.";
        header("Location: ./../index.php#book");
        exit();
    }

  
    $stmt = $conn->prepare("INSERT INTO bookings (name, email, number, scheduled_at) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $number, $date);

    if ($stmt->execute()) {
        $_SESSION['message_success'] = "Workshop booked successfully!";
    } else {
        $_SESSION['message_error'] = "Failed to book. Please try again.";
        error_log("Booking error: " . $stmt->error);
    }

    $stmt->close();
    $conn->close();

    header("Location: ./../index.php#book");
    exit();
}
?>
