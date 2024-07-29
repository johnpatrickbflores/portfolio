<?php
require ('../config/connect_db.php');

$sql = "DELETE FROM room_list WHERE room_id = '".$_GET['room_id']."'"; 
$return = mysqli_query($conn,$sql);

header('Location:rooms.php');
?>