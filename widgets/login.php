<?php
session_start(); 

include "db_connect.php";

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// If user is already logged in, redirect to main page
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    header("Location: /Weekend-Cafe/index.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    error_log("Username: $username, Password: $password");

    $stmt = $conn->prepare("SELECT * FROM tbl_login WHERE username=? AND password=?");
    if ($stmt) {
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            $stmt->close();


            $redirect_url = "/Weekend-Cafe/index.php"; 
            header("Location: $redirect_url");
            exit();
        } else {
            $_SESSION["login_error"] = "Invalid login credentials";
            header("Location: weekend_login.php");
            exit();
        }
    } else {
     
        $_SESSION["login_error"] = "Database query error: " . $conn->error;
        header("Location: weekend_login.php");
        exit();
    }
}


if ($conn && $conn->ping()) {
    $conn->close();
} else {
    error_log("Connection is already closed or invalid.");
}
?>
