<!DOCTYPE html>
<html lang="en">
    <?php
        include('head.php');
        include ('../config/connect_db.php');
        session_start();
        error_reporting(0);

        if (isset($_SESSION['username'])) {
            header("Location: admin_dashboard.php");
        }

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = md5($_POST['password']);
            
            $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
            $result = mysqli_query($conn, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
            } else {
                echo "<script>alert('Sorry, Email address or Password is Wrong.')</script>";
                http_response_code(401);
            }
        }
    ?>
    <body>
        <div class="login-outer-container">
            <div class="login-inner-container">
                <div class="login-logo-container">
                    <img src = "../img/code_incognito_logo.png">
                </div>
                <div class="log-in-form">
                    <p class = "welcome-text">Welcome Admin!</p>
                    <form action = "" method="post">
                        <input type = "text" id="login-username" name="email" placeholder = "Email" value="<?php echo $email; ?>" required>
                        <input type = "password" id="login-pass" name="password" placeholder = "Password"style="margin-left: -4px; cursor: pointer;"value="<?php echo $_POST['password']; ?>" required> 
                        <button type = "submit" name = "submit" class="btn-login">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>	
    </body>
</html>