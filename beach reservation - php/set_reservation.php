<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<?php
    include('config/connect_db.php');
    include('head.php');
    session_start();

    
    if(isset($_POST['request'])){
        //Session of room_id is for getting the room id of selected room
        $room_id = $_SESSION['room_id'];
        $client_id = $_SESSION['id'];
        $date = $_POST['date'];
        $time = $_POST['time'];

        $room = "SELECT * FROM room_list where room_id = ".$room_id;
		$schedule = date('Y-m-d',strtotime($date)).' '.date('H:i',strtotime($time)).":00";
		$day = date('l',strtotime($date));
		$time = date('H:i',strtotime($time)).":00";
		$sched = date('H:i',strtotime($time));
		$room_sched_check ="SELECT * FROM room_schedule where room_id = $room_id and day = '$day' and ('$time' BETWEEN time_from and time_to )";
		$result = mysqli_query($conn, $room_sched_check);
        // To check if the time is within business hours and to check room is available in that day
        if($result->num_rows <= 0){
			echo "<script>alert('Sorry, selected schedule is not valid. Set your time within 8:00am to 5:00pm')</script>";
		}
        else{
            $reservation_check ="SELECT * FROM appointment_list where room_id = $room_id and (schedule = '$schedule')";
            $res_result = mysqli_query($conn, $reservation_check);
            // To check if there is a double booking
            if($res_result->num_rows<=0){
                $status = 0;
                $room_sched_check = "INSERT INTO appointment_list (room_id, client_id, schedule, status)
                            VALUES ('$room_id','$client_id','$schedule','$status')";
                $result = mysqli_query($conn, $room_sched_check);
                //To check if the request is inserted in the database
                if ($result) {
                    echo "<script>alert('Thank you, Your reservation request is sent successfully')</script>";
                    $room_id = "";
                    $client_id = "";
                    $schedule = "";
                    $status = "";
                    $day = "";
                    $time = "";
                } 
                else {
                    echo "<script>alert('There is an error')</script>";
                }
            }
            else{
                echo "<script>alert('There is a double booking in this schedule, pick another')</script>";
            }
        }
    };
?>
<!-- Form Body -->
<section class="reservation-body">
    <div class="set-res-outer-container" data-aos="zoom-in">
        <div class="set-res-inner-container">
            <form action="" id="set-reservation-sched" method="POST">
                <div class="form-group">
                    <label>Date</label>
                    <input type="date" value="" name="date" class="form-control" required>
                </div>

                <div class="form-group">
                    <label>Time</label>
                    <input type="time" value="" name="time" class="form-control" required>
                </div>

                <hr>
                <div class="col-md-12 text-center">
                    <button type="submit" name="request" class="request-btn">Request</button>
                    <!-- Yung specific session na room id lang yung maunset for the close button-->
                    <a href="close_set_reservation.php">
                        <button type="button" name="close" class="request-close-btn">Close</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 400,
        duration: 1000
    });
</script>
</html>