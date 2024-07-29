<!DOCTYPE html>
<html lang="en">
<?php 
    include("head.php");
    include ('config/connect_db.php');

    error_reporting(0);

    session_start();

    if (isset($_SESSION['username'])) {
        header("Location: login.php");
    }

    if (isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact_num = $_POST['contact_num'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);

        if ($password == $cpassword) {
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            if (!$result->num_rows > 0) {
                $sql = "INSERT INTO users (first_name,last_name,contact, address,email, username, password)
                        VALUES ('$first_name','$last_name','$contact_num','$address', '$email','$username', '$password')";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    echo "<script>alert('Wow! User Registration Completed.')</script>";
                    $first_name = "";
                    $last_name = "";
                    $contact_num = "";
                    $address = "";
                    $username = "";
                    $email = "";
                    $_POST['password'] = "";
                    $_POST['cpassword'] = "";
                } 
                else {
                    echo "<script>alert('Woops! Something Wrong Went.')</script>";
                }
                header("Location: login.php");
            } else {
                echo "<script>alert('Woops! Email Already Exists.')</script>";
            }
            
        } else {
            echo "<script>alert('Password Not Matched.')</script>";
        }
    }
?>
<body>
    <div class="registration-outer-container">
        <div class="registration-inner-container">
    <div class="login-logo-pic">
        <img src = "img/BDA_logo.png">
    </div>

    <div class="registration-form">
        <p class="register-text">Register</p>
        <form action="" method="post" class="login-email">
            <input type ="text" class="signUp-input" name="first_name" placeholder ="Firstname"value="<?php echo $first_name; ?>">
            <input type ="text" class="signUp-input" name="last_name" placeholder ="Lastname"value="<?php echo $last_name; ?>">
            <input type ="text" class="signUp-input" name="contact_num" placeholder ="Contact"value="<?php echo $contact_num; ?>">
            <input type ="text" class="signUp-input" name="address" placeholder ="Address"value="<?php echo $address; ?>">
            <input type ="text" class="signUp-input" name="email" placeholder ="Email"value="<?php echo $email; ?>">
            <input type ="text" class="signUp-input" name="username" placeholder ="Username"value="<?php echo $username; ?>">
            <input type ="password" name="password" placeholder="Password" class="signUp-input">
            <input type ="password" name="cpassword" placeholder="Confirm Password"class="signUp-input">
            <button type="submit" name="submit" class="btn-login">Register</button>
        </form>
        <p class = "got-acc">Have an account? <a id = register href = "login.php">Login Here.</a></p>
    </div>
    </div>
    </div>
    <?php
        include('footer.php');
    ?>	
</body>

</html>