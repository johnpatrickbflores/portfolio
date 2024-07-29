<html lang="en">
    <?php
        session_start();
        include('head.php');
    ?>
    <body>
        <div class="hero-outer-container">
            <div class="hero-inner-container">
                <?php 
                    if(isset($_SESSION['username'])){
                    ?>
                    <div class="hero-main-container">
                        <div class="hero-welcome-container">
                            <h1>Welcome 
                                <?php
                                    echo $_SESSION['username'];
                                ?>
                            </h1>
                            <p>Great! you are now part of the Beach de Alipio<br>Feel free to browse in our website</p>
                        </div>
                        <div class="hero-btn-container">
                            <a href="booknow.php" id="hero-booknow-btn">
                                <button class="hero-btn-booknow"><span>Book Now!</span></button>
                            </a>
                        </div>
                    </div>
                    <div class="hero-logo-container">
                        <img src="./img/BDA_logo.png">
                    </div>
                    <?php
                    }
                    else{
                       ?>
                       <div class="hero-main-container">
                            <div class="hero-welcome-container">
                                <h1>Welcome our website</h1>
                                <p>Visit our glamorous Beach Resort. Enjoy your holiday with us</p>
                            </div>
                            <div class="hero-btn-container">
                                <a href="booknow.php" id="hero-booknow-btn">
                                    <button class="hero-btn-booknow"><span>Book Now!</span></button>
                                </a>
                                <a href="login.php" id="hero-login-btn">
                                    <button class="hero-btn-booknow"><span>Login</span></button>
                                </a>
                            </div>
                        </div>
                        <div class="hero-logo-container">
                            <img src="./img/BDA_logo.png">
                        </div>
                    <?php
                    }
                ?>
            </div>
        </div>
        <section class="about">
            <h3>Meet you in Paradise</h3>
            <p><br>Need an escape? Alipio’s Beach House in the Philippines offers you the perfect sanctuary to reset and
                recharge.
                Just a few hours’ drive from Olongapo, Barretto is the idyllic setting for all your getaway needs.
                Enjoy staying in our famous beach house and witness its merge with the azure waters of the adjacent seas.
            </p>
            <br>
            <p><br>We are located at #15 National High Way, Barretto, Olongapo City. <br><br>Just in front of Petron</p>
        </section>
        <section class="vmontage">
            <div class="white-box">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id mauris non tortor placerat maximus.
                    Suspendisse cursus erat at ex condimentum, non egestas tellus porta. Quisque velit purus, viverra nec
                    magna nec,
                    maximus lacinia tellus. Vestibulum at risus placerat, dignissim libero vel, posuere odio.
                    Curabitur mattis interdum nisl lacinia congue. Praesent enim lorem, pharetra at mattis ac, elementum
                    quis lorem.
                    Curabitur lacinia ipsum nisl, ut sagittis mauris tempor at.
                </p>
            </div>
            <div class="grey-box">
                <h1>
                    VIDEO OR MONTAGE<br>OF BEACH
                </h1>
            </div>
        </section>
        <section class="house-cottages">
            <h3>Alipio’s Beach House Rooms and Cottages</h3>
            <p>By offering 5 rooms and 10 cottages with both has 2 different types,
                our Beach House manages to retain an air of exclusivity that can be hard to find elsewhere in the area.
            </p>
        </section>
        <section class="rent">
            <div class="room-container">
                <a href="blank">SEE ALL ROOMS -></a>
                <img src="img/rooms.jpg">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id mauris non tortor placerat maximus.
                    Suspendisse cursus erat at ex condimentum, non egestas tellus porta. Quisque velit purus, viverra nec
                    magna nec,
                    maximus lacinia tellus. Vestibulum at risus placerat, dignissim libero vel, posuere odio.
                    Curabitur mattis interdum nisl lacinia congue. Praesent enim lorem, pharetra at mattis ac,
                    elementum quis lorem. Curabitur lacinia ipsum nisl, ut sagittis mauris tempor at.
                </p>
                <div class="details">
                    <a href="blank">SEE DETAILS -></a>
                </div>
            </div>
            <div class="cottage-container">
                <a href="blank">SEE ALL COTTAGES -></a>
                <img src="img/cottage.jpg">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc id mauris non tortor placerat maximus.
                    Suspendisse cursus erat at ex condimentum, non egestas tellus porta. Quisque velit purus, viverra nec
                    magna nec,
                    maximus lacinia tellus. Vestibulum at risus placerat, dignissim libero vel, posuere odio.
                    Curabitur mattis interdum nisl lacinia congue. Praesent enim lorem, pharetra at mattis ac,
                    elementum quis lorem. Curabitur lacinia ipsum nisl, ut sagittis mauris tempor at.
                </p>
                <div class="details">
                    <a href="blank">SEE DETAILS -></a>
                </div>
            </div>
        </section>
        <section class="offer">
            <p>WHAT WE OFFER</p>
            <h3>Explore Alipio’s Beach House</h3>
            <div class="offer-box">

            </div>
        </section>
        <?php
            include('footer.php');
        ?>
    </body>
</html>