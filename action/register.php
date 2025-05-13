<?php
    session_start();
    require_once './../connect.php';

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['register'])){
       
        $firstname = htmlspecialchars(trim($_POST['firstname']));
        $lastname  = htmlspecialchars(trim($_POST['lastname']));
        $email     = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
        $password  = trim($_POST['password']);


       
        if(empty($firstname) || empty($lastname) || empty($email)){
            $_SESSION['message_error'] = "Please Fill UP Filled";
            header("Location: ./../register.php");
            exit();
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['message_error'] = "Invalid Email Address";
            header("Location: ./../register.php");
            exit();
        }

        if(empty($password)){
             $_SESSION['message_error'] = "Password is required";
            header("Location: ./../register.php");
            exit();
        }elseif(strlen(trim($password)) < 6){
            $_SESSION['message_error'] = "Passowrd must consist of 6 letters";
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
            header("Location: ./../register.php");
            exit();
        } else {
            $stmt->close();
            $stmt = $conn->prepare("INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $firstname, $lastname, $email, $hashed_password);

            if ($stmt->execute()) {
                $_SESSION['message_success'] = "Signup successful!";
                header("Location: ./../register.php");
                exit();
            } else {
                echo "Error: " . $stmt->error;
            }
        }

        $stmt->close();
        $conn->close();
    }
   
?>
