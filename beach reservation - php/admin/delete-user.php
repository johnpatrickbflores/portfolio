<?php
require ('../config/connect_db.php');

$sql = "DELETE FROM users WHERE id = '".$_GET['id']."'"; 
$return = mysqli_query($conn,$sql);

header('Location:admin_dashboard.php');
?>