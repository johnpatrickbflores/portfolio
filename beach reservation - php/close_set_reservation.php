<?php 
session_start();
unset($_SESSION['room_id']);

header("Location: booknow.php");

?>