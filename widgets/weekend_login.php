<?php 
    include "login.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../assets/images/WEEKEND CAFE (1).png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/p_management.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Weekend-Cafe Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <input type="checkbox" id="flip">
        <div class="cover">
            <div class="front">
                <img src="images/frontImg.jpg" alt="" >
                <div class="text">
                    <span class="text-1">Every new friend is a <br> new adventure</span>
                    <span class="text-2">Let's get connected</span>
                </div>
            </div>
            <div class="back">
                <img class="backImg" src="images/backImg.jpg" alt="">
                <div class="text">
                    <span class="text-1">Complete miles of journey <br> with one step</span>
                    <span class="text-2">Let's get started</span>
                </div>
            </div>
        </div>
        <div class="forms">
            <div class="form-content">
                <div id="login">
                    <div class="title">Login</div>
                    <form action="weekend_login.php<?php echo isset($_GET['return_url']) ? '?return_url=' . urlencode($_GET['return_url']) : ''; ?>" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="text" name="username" placeholder="Enter your username" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <div>
                            <button class="w3-button w3-btn w3-button button-btn" type="submit" name="login" style="background-color: #d05e31; border-radius:0.40rem; margin-top: 0.40rem; color: #fefefe">Login</button>
                            </div>
                                
                            <div class="text sign-up-text">Don't have an account? <label for="flip">Sign up</label></div>
                        </div>
                    </form>
                    <?php
                  
                    if (isset($_SESSION["login_error"])) {
                        echo '<div class="error-message w3-margin-top" style="margin top: 2rem;">' . $_SESSION["login_error"] . '</div>';
                        unset($_SESSION["login_error"]);
                    }
                    ?>
                </div>
                <div class="signup-form" id="signup">
                    <div class="title">Sign Up</div>
                    <form action="signup.php" method="POST">
                        <div class="input-boxes">
                            <div class="input-box">
                                <i class="fas fa-user"></i>
                                <input type="text" name="username" placeholder="Enter your name" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-envelope"></i>
                                <input type="email" name="email" placeholder="Enter your email" required>
                            </div>
                            <div class="input-box">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Enter your password" required>
                            </div>
                            <div class="button input-box">
                                <button class="w3-button w3-btn w3-button button-btn" type="submit" name="signup" style="background-color: #d05e31; border-radius:0.20rem; margin-top: 0.20rem; color: #fefefe">Sign Up</button>
                            </div>
                            <div class="text sign-up-text">Already have an account? <label for="flip">Login</label></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
