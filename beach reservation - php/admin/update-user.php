<!DOCTYPE html>
<html lang="en">
<?php 
    include("head.php");
    include ('../config/connect_db.php');

    error_reporting(0);

    session_start();

    if (isset($_POST['submit'])) {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $cpassword = md5($_POST['cpassword']);
        $id = $_GET['id'];

            if (!$result->num_rows > 0) {
                $sql = "UPDATE users SET first_name = '$first_name', last_name = '$last_name', contact = '$contact', address = '$address', username = '$username', email = '$email', password = '$password' WHERE id = '$id'";
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
                header("Location: admin_dashboard.php");
            } else {
                echo "<script>alert('Woops! Email Already Exists.')</script>";
            }
            
        } 
?>
<body>

    <div class="registration-outer-container">
        <div class="registration-inner-container">
    <div class="login-logo-pic">
        <img src = '../img/BDA_logo.png'>
    </div>
    <div class="registration-form">
        <p class="register-text">Update User</p> 
        <form method="post" class="login-email">
        <?php
        $sql = "SELECT * FROM users WHERE id ='".$_GET['id']."'"; 
        $return = mysqli_query($conn,$sql);
        while ($row = mysqli_fetch_array($return)){
        ?>
            <input type ="text" class="signUp-input" name="first_name" placeholder ="Firstname" value = "<?php echo $row['first_name']; ?>">
            <input type ="text" class="signUp-input" name="last_name" placeholder ="Lastname" value = "<?php echo $row['last_name']; ?>">
            <input type ="number" class="signUp-input" name="contact" placeholder ="Contact" value = <?php echo $row['contact']; ?>>
            <input type ="text" class="signUp-input" name="address" placeholder ="Address" value = "<?php echo $row['address']; ?>">
            <input type ="text" class="signUp-input" name="email" placeholder ="Email" value = "<?php echo $row['email']; ?>">
            <input type ="text" class="signUp-input" name="username" placeholder ="Username" value = "<?php echo $row['username']; ?>">
            <input type ="password" name="password" placeholder="Password" class="signUp-input">
            <input type ="password" name="cpassword" placeholder="Confirm Password"class="signUp-input" value = "<?php echo $row['cpassword']; ?>">
            <button type="submit" name="submit" class="btn-login">Update</button>
        
        <?php
        }
        ?>
        </form>


    </div>
    </div>
    </div>

    <?php
        include('footer.php');
    ?>	
</body>

</html>