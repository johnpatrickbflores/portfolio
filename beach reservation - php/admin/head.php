<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="../img/BDA_logo.png" type = "image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>Admin | Beach De Alipio</title>
</head>
<body>
    <nav>
        <div class="logo">
            <a><img src="../img/BDA_logo.png" alt="logo">Beach De Alipio</a>
        </div>
        <div class="navbar">
            <?php
                if(isset($_SESSION['username'])){
            ?>
                <li><a href="logout.php">LOGOUT</a></li>
            <?php
                }
                else{
            ?>
                <li><a href="admin-login.php">LOGIN</a></li>
            <?php
            }
            ?>
            
        </div>
    </nav>
</body>