<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <script type="text/javascript" src="main.js"></script>
    <title>Rent A Car</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header>
        <a href="#" class="logo"><img src="jeep.png?v=<?php echo time(); ?>"></a>

        <div class="bx bx-menu" id="menu-icon"></div>

        <ul class="navbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="Categories.php">Categories</a></li>
            <li><a href="About.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        <div class="header-btn">
           <a href="signin.php" class="sign-up">Sign Up</a>
           <a href="signin.php" class="sign-in">Sign in</a>
           <!-- <a href="singin.html" class="sign-in">Sign In</a>-->
          
        </div>
    </header>

    <section class="home" id="home">
        <div class="text">
            <h1><span>Looking</span> to <br>rent a car</h1>
            <p style="color: cyan;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. </p>
            <div class="app-stores">
                <img src="ios.png">
                <img src="512x512.png">
            </div>
            <div class="form-container">
                <form action="">
                    <div class="input-box">
                        <span>Location</span>
                        <input type="search" name="" id="" placeholder="Search Places">
                    </div>
                    <div class="input-box">
                        <span>Pick-Up Date</span>
                        <input type="date" name="" id="">
                    </div>
                    <div class="input-box">
                        <span>Return Date</span>
                        <input type="date" name="" id="">
                    </div>
                    <input type="submit" name="" id="" class="btn">
                </form>
            </div>
        </div>
    </section>

</body>
</html>
