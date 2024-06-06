<?php
session_start(); 

include "db_connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['signup'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM tbl_login WHERE username=? OR email=?");
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<script>alert("Username or email already exists. Please try again with a different username or email.")</script>';
        echo '<script>window.location.href = "weekend_login.php";</script>';
        exit();
    } else {
        $stmt->close();

        $stmt = $conn->prepare("INSERT INTO tbl_login(username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            echo '<script>alert("Registration successful! Please login now.")</script>';
            echo '<script>window.location.href = "weekend_login.php";</script>';
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }
    }
}

$conn->close();
?>
