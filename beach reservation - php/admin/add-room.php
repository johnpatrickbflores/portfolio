<!DOCTYPE html>
<html lang="en">
<?php 
    include('head.php');
    include ('../config/connect_db.php');

    error_reporting(0);

    session_start();


    if (isset($_POST['submit'])) {
        $img_name = $_FILES['img_path']['name'];
        $img_size = $_FILES['img_path']['size'];
        $tmp_name = $_FILES['img_path']['tmp_name'];
        $error = $_FILES['img_path']['error'];
        $img_path = $_FILES['img_path'];
        $room_id = $_POST['room_id'];
        $room_type = $_POST['room_type'];
        $roomDesc = $_POST['roomDesc'];
        $price = $_POST['price'];
    
        if ($error === 0) {
            if ($img_size > 125000000) {
                $em = "Sorry, your file is too large.";
                header("Location: add-room.php?error=$em");
            }else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);
    
                $allowed_exs = array("jpg", "jpeg", "png"); 
    
                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                    $img_upload_path = '../uploaded-room/'.$new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);
    
                    $qry = "INSERT INTO `room_list` (`room_id`, `room_type`,`roomDesc`,`img_path`,`price`) 
                    VALUES ('$room_id', '$room_type', '$roomDesc', '$new_img_name', '$price')";
                    mysqli_query($conn,$qry);
                    header("location:rooms.php");
                }else{
                    $em = "You can't upload files of this type";
                    header("Location:add-room.php?error=$em");
                }
            }
        }else{
            header("Location:rooms.php");
        }
    }
?>

<body>
    <div class="registration-outer-container">
        <div class="registration-inner-container">
    <div class="login-logo-pic">
        <img src = "../img/BDA_logo.png">
    </div>

    <div class="registration-form">
        <p class="register-text">Create new Room</p>
        <form method="post" class="login-email" enctype="multipart/form-data">
            <input type = "file" class ="signUp-input" name ="img_path" accept = "image/*">
            <input type ="text" class="signUp-input" name="room_id" placeholder ="Room ID"value="<?php echo $room_id; ?>">
            <input type ="text" class="signUp-input" name="room_type" placeholder ="Room Type"value="<?php echo $room_type; ?>">
            <input type ="text" class="signUp-input" name="roomDesc" placeholder ="Room Description"value="<?php echo $roomDesc; ?>">
            <input type ="text" class="signUp-input" name="price" placeholder ="Price"value="<?php echo $price; ?>">
            <button type="submit" name="submit" class="btn-login">Create Room</button>
        </form>
        <p class = "got-acc">Back to Dashboard? <a id = register href = "rooms.php">Return</a></p>
    </div>
    </div>
    </div>
    <?php
        include('footer.php');
    ?>	
</body>

</html>