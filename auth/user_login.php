<?php
session_start();
require_once "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $username, $hashed_password);
        $stmt->fetch();
    
        if (password_verify($password, $hashed_password)) {
            $_SESSION["user_id"] = $id;
            $_SESSION["username"] = $username;
            $_SESSION["success_message"] = "Login successful! Welcome, $username.";
            header("Location: ../HOMEPAGE.php");
            exit();
        } else {
            echo "<script>alert('Invalid password!'); window.location.href='../login.php';</script>";
        }
    } else {
        echo "<script>alert('No user found!'); window.location.href='../login.php';</script>";
    }
    
    $stmt->close();
    $conn->close();
}
?>