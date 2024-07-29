<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <?php
        session_start();
        include('head.php');
        include('config/connect_db.php');
        
        if(isset($_SESSION['room_id'])){
            header("Location: set_reservation.php");
        }
        if(isset($_POST['submit'])){
            if(isset($_SESSION['username'])){
                $_SESSION['room_id'] = $_POST['room_id'];
            }
            else{
                header("Location: login.php");
            }
        }
    ?>
    <body>
        <div class="mainform">
            <div class="main-outer-container" data-aos="zoom-in">
                <div class="btn-container">
                    <a href="view_status.php"><button class="btn-view-status">View Status</button></a>
                </div>
                <div class="roomlist-main-container">
                    <div class="roomlist-inner-container">
                        <div class="roomlist-container">
                            <!--If statement then loop-->
                            <?php
                                $sql= "SELECT * FROM room_list";
                                $return = mysqli_query($conn,$sql);
                                while ($row = mysqli_fetch_array($return)){
                            ?>
                            <div class="row">
                                <div class="column_first_pic">
                                    <img src = "uploaded-room/<?php echo $row['img_path']; ?>" height="180px" width="180px">
                                </div>
                                <div class="column_second_roomDesc">
                                    <p><b>Room:</b> <?php echo $row['room_id']?></p>
                                    <p><b>Type:</b> <?php echo $row['room_type']?></p>
                                    <p><b>Price:</b> <?php echo $row['Price']?></p>
                                    <p><b>Descrition:</b></p>
                                    <p id="second_roomDesc"><?php echo $row['roomDesc']?></p>
                                </div>
                                <div class="column_third_booknow_btn">
                                    <form action="" method="POST">
                                        <input type="hidden" name="room_id" value="<?php echo $row['room_id']?>">

                                        <button id="set_reservation" class="set_reservation" name="submit">Set Reservation</button>
                                    </form>
                                </div>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            include('footer.php');
        ?>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 400,
        duration: 1000
    });
</script>
    </body>
</html>