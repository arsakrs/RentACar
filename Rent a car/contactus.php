<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
  
<header>
    <a href="index.php" class="logo"><img src="jeep.png?v=<?php echo time(); ?>"></a>
    <div class="bx-menu" id="menu-icon"></div>
    <ul class="navbar">
        <li><a href="index.php">Home</a></li>
        <li><a href="Categories.php">Categories</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
    </ul>
</header>

<div class="contact-section">
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="ThankYou.php" method="post">
            <input type="text" name="name" class="text-box" placeholder="Your Name" required>
            <input type="email" name="email" class="text-box" placeholder="Your Email" required>
            <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
            <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
    </div>
    <div class="contact-info">
        <div><i class="fa-solid fa-location-dot"></i>Magjistralja Prishtine-Ferizaj, Kosove </div>
        <div><i class="fa-solid fa-envelope"></i>RentACarExpress@gmail.com</div>
        <div><i class="fa-solid fa-phone"></i>+383 (0)38 500 500</div>
        <div><i class="fa-solid fa-clock"></i>Mon-Sun 08:00 AM to 18:00 PM</div>
    </div>
</div>

<script>
    function validateForm() {
        let name = document.forms["contactForm"]["name"].value;
        let email = document.forms["contactForm"]["email"].value;
        let message = document.forms["contactForm"]["message"].value;

        if (name == "" || email == "" || message == "") {
            alert("All fields must be filled out");
            return false;
        }
        return true;
    }
</script>
<style>
    /* Your existing styles */
    .contact-form .text-box{
        background: #090909;
        color: #f2eaea;
        border: none;
        width: calc(50% - 10px);
        height: 50px;
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
        opacity: 0.9;
    }
    .contact-form .text-box:focus {
        color: #e7dfdf; /* Ngjyra e tekstit kur fusha është në fokus */
    }
    body{
        min-height: 100vh;
        background-image: url(vetura.png);
        background-size: cover;
        display: flex;
        justify-content: center;
        align-items: center;
    }   
    /* Additional styles to arrange contact section */
    .contact-section {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        max-width: 1200px;
        margin: 0 auto;
        padding: 50px;
        background: rgba(18, 17, 17, 0.7);
        border-radius: 10px;
        box-shadow: #1d1c1c;
    }

    .contact-form {
        flex: 1;
        margin-right: 20px;
    }

    .contact-info {
        flex: 1;
        padding-left: 20px;
        border-left: 1px solid #0b0a0a;
    }
    .contact-info{
        color:#e2dada;
        max-width: 500px;
        line-height: 65px;
        padding-left: 50px;
        font-size: 18p;
    }
    .contact-info i{
        margin-right: 20px;
        font-size: 25px;
    }
    .contact-form{
        max-width: 700px;
        margin-right: 50px;
    }
    .contact-info, .contact-form{
        flex:1;
    }
    .contact-form h2{
        color:#efdfdf;
        text-align: center;
        font-size: 35px;
        text-transform: uppercase;
        margin-bottom: 30px;
    }
    .contact-form .send-btn{
        float:right;
        background:#e4dbdb ;
        color: #3b3838;
        border: none;
        width: 120px;
        height: 40px;
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 2px;
        border-radius:5px;
    }
    .contact-form .send-btn:hover{
        background: #0582E3;
    }
    .contact-form textarea {
        background: #111010; /* Black background */
        color: #c8bfbf; /* Light text color */
        border: none;
        width: calc(100% - 24px); /* Adjust width for padding */
        padding: 12px;
        font-size: 15px;
        border-radius: 5px;
        box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        margin-bottom: 20px;
        opacity: 0.9;
        resize: vertical; /* Allowing vertical resizing */
        height: 150px; /* Setting a fixed initial height */
    }

    .contact-form textarea:focus {
        color: #c8bfbf; /* Text color when in focus */
    }
</style>

