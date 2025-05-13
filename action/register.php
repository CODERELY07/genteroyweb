<?php
    session_start();
    require_once './../connect.php';

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register'])){
       
        $firstname = htmlspecialchars(trim($_POST['firstname']));
        $lastname  = htmlspecialchars(trim($_POST['lastname']));
        $email     = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password  = trim($_POST['password']);

        if(empty($firstname) || empty($lastname) || empty($email) || $password){
            $_SESSION['message'] = "Please Fill UP Filled";
            header("Location: ./../register.php");
            exit();
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            die("Invalid email format.");
        }

        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Check if email exists
        $stmt = $conn->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            echo "Email already registered.";
        } else {
            $stmt->close();
            $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);

            if ($stmt->execute()) {
                echo "Signup successful!";
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        $stmt->close();
        $conn->close();
    }

?>
