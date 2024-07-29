<!DOCTYPE html>
<html lang="en">
<?php
    include('head.php');
    include ('./config/connect_db.php');
    session_start();

    error_reporting(0);

    if (isset($_SESSION['username'])) {
        header("Location: home.php");
    }

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);
        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            $_SESSION['id'] = $row['id'];
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
                <img src = "img/BDA_logo.png">
            </div>
            <div class="log-in-form">
                <p class = "welcome-text">Welcome users</p>
                <form action = "" method="post">
                    <input type = "text" id="login-username" name="email" placeholder = "Email" value="<?php echo $email; ?>" required>
                    <input type = "password" id="login-pass" name="password" placeholder = "Password"style="margin-left: -4px; cursor: pointer;"value="<?php echo $_POST['password']; ?>" required> 
                    <button type = "submit" name = "submit" class="btn-login">LOGIN</button>
                </form>
                <p class="no-acc">Don't have an account? <a id= register href = "signup.php">Register here.</a></p>
                <p class="no-acc">Go to landing page? <a id= register href="home.php">Back.</a></p>
            </div>
        </div>
    </div>
    <?php
        include('footer.php');
    ?>	
</body>
<script>
    const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');

  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
</script>
</html>