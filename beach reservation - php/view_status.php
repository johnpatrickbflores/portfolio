<?php
    session_start();
    include('head.php');
    require('config/connect_db.php');
    if(!isset($_SESSION['username'])){
        header("Location: login.php");
    }

?>
<div class="">
    <table>
        <tr>
            <th>Room_id</th>
            <th>Schedule</th>
            <th>Status</th>
            <th>Date Created</th>
            <th>Action</th>
        </tr>
        <?php
            $id=$_SESSION['id'];
            $sql= "SELECT * FROM appointment_list where client_id=$id";
            $return = mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($return)){
        ?>
        <tr>
            <td><?php echo $row['room_id']; ?></td>
            <td><?php echo $row['schedule']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['date_created']; ?></td>
            <td>
            <button class = "delete">Cancel</button>
            </td>
        </tr>
        <?php
            }
        ?>
    </table>
</div>