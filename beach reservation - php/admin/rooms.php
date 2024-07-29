<html lang="en">
    <?php
        session_start();
        include('head.php');
        require('../config/connect_db.php');
        if(!isset($_SESSION['username'])){
            header("Location: admin-login.php");
        }
    ?>
    <body>
        <div class="adminDashBoard-main-container">
            <?php 
                include('side-menu.php');
            ?>
            <div class="admin-outer-container">
                <div class="admin-inner-container">
                <a href = "add-room.php"><button class = "edit">Add Room</button>
                    <section class="admin-users">
                            <table>
                                <tr>
                                    <th>Room Id</th>
                                    <th>Room Type</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Price</th>
                                    <th>Date Created</th>
                                    <th>Action</th>
                                </tr>
                                <?php

                                    $sql= "SELECT * FROM room_list";
                                    $return = mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_array($return)){
                                
                                ?>
                                <tr>
                                    <td><?php echo $row['room_id']; ?></td>
                                    <td><?php echo $row['room_type']; ?></td>
                                    <td><?php echo $row['roomDesc']; ?></td>
                                    <td><img src = "../uploaded-room/<?php echo $row['img_path']; ?>" height="100px" width="100px"></td>
                                    <td><?php echo $row['Price']; ?></td>
                                    <td><?php echo $row['date_created']; ?></td>
                                    <td>
                                        <button class = "edit">Edit</button>
                                        <a href =<?php echo "delete-room.php?&room_id=".$row['room_id']."";?>><button class = "delete">Delete</button>
                                    </td>
                                </tr>
                                <?php
                                        }
                                ?>
                            </table>
                    </section>
                </div>
            </div>
        </div>
    </body>
</html>