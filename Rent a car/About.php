<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About</title>
    <link rel="stylesheet" type="text/css" href="style.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script:wght@700&family=Lilita+One&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <style>
        * {box-sizing: border-box}
        body {font-family: 'Dancing Script', cursive; margin: 0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 100%;
            height: 80%;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .texti {
    position: absolute;
    bottom: 40%;
    width: 100%;
    margin-right: 20%;
    text-align: center;
    font-family: 'Dancing Script', cursive;
    color: lightgrey;
    font-size: 24px;
}

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        .butoni {
            border: solid 1px grey;
            padding: 12px 34px;
            font-size: 13px;
            background: #080808;
            cursor: pointer;
            color: #cdccd5;
            margin-top: 20px; /* Rregullo marginën e sipërme për të zhvendosur butonin më poshtë */
        }

        @keyframes fade {
            from {opacity: .4} 
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next, .texti {font-size: 11px}
        }
    </style>
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

<div class="slideshow-container">
    <div class="mySlides fade">
        <div class="numbertext">1 / 3</div>
        <img src="kerri.png" style="width: 100%; height:auto;">
        <div class="texti"><h1><strong>Drive your Dreams</strong></h1>  <a href="contactus.php" class="butoni">Read More</a></div>
    </div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="car2.png" style="width: 100%; height: auto;"><!--qur e qet ni foto tanen te img -->
  <div class="texti"><h1><strong>Don’t count the miles, only the memories.</strong></h1></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="car1.png" style="width: 100%; height: auto;"><!--qur e qet ni foto tanen te img -->
  <div class="texti" ><h1><strong>Driving a luxury car that is the pinnacle of a successful lifestyle</strong></h1></div>
</div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {slideIndex = 1}    
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";  
        dots[slideIndex-1].className += " active";
    }
</script>

</body>
</html>
