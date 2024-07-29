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
                    <section class="admin-users">
                            <table>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Contact Number</th>
                                    <th>Address</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                                <?php

                                    $sql= "SELECT * FROM users";
                                    $return = mysqli_query($conn,$sql);
                                    while ($row = mysqli_fetch_array($return)){
                                
                                ?>
                                <tr>
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['last_name']; ?></td>
                                    <td><?php echo $row['contact']; ?></td>
                                    <td><?php echo $row['address']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td>
                                        <a href =<?php echo "update-user.php?&id=".$row['id']."";?>><button class = "edit">Edit</button>
                                        <a href =<?php echo "delete-user.php?&id=".$row['id']."";?>><button class = "delete">Delete</button>
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