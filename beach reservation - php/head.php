<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="img/BDA_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Beach De Alipio</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a><img src="img/BDA_logo.png" alt="logo">Beach De Alipio</a>
        </div>
        <div class="navbar">
            <li><a href="home.php">HOME</a></li>
            <div class="dropdown-1">
            <li class="accomodation-dropdown"><a href="accomodation.php">ACCOMODATION</a></li>
                <div class="accomodation-class">
                    <a href="accomodation.php#room-box">Rooms</a>
                    <a href="accomodation.php#cottage-box">Cottage</a>
                </div>
            </div>
            <div class="dropdown-2">    
            <li class="offers-dropdown"><a href="offers.php">OFFERS</a></li>
            <div class="offers-class">
                    <a href="offers.php#bananaB">Banana Boat</a>
                    <a href="offers.php#kayakB">Kayak</a>
                    <a href="offers.php#paddleB">Paddle Board</a>
                    <a href="offers.php#campingT">Camping Tent</a>
                    <a href="offers.php#jetskiR">Jetski</a>
                    <a href="offers.php#campfireT">Campfire</a>
            </div>
            </div>
            <li><a href="contact_us.php">CONTACT US</a></li>
                <?php
                    if(isset($_SESSION['username'])){
                ?>
                    <li><a href="logout.php">LOGOUT</a></li>
                <?php
                    }
                    else{
                ?>
                    <li><a href="login.php">LOGIN</a></li>
                <?php
                }
                ?>
        </div>
    </nav>
</body>