<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
/>


    <link rel="stylesheet " href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet " href="style.css">
</head>

<body>
    <section class="header">
        <a href="home.php" class="logo "> travel</a>
        <nav class="navbar">
            <a href="home.php">Home</a>
            <a href="About.php">About</a>
            <a href="Package.php">package</a>
            <a href="Book.php">Book</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <div class="heading" style="background:url(raigad.webp)">
   <h1>Book now</h1>
    </div>
  <section class="booking">
    
  <h1 class="heading-title"> book your trip!</h1>
  <form action="book_form.php" method="post" class="book-form">
     <div class="flex">
      <div class="inputBox">
        <span>name:</span>
        <input type="text" placeholder="enter your name"  name="name">
        </div>
     <div class="inputBox">
    
     <span>email:</span>
        <input type="email" placeholder="enter your email" name="email">
     </div>
     <div class="inputBox">
        <span>phone:</span>
        <input type="number" placeholder="enter your number" name="phone">
     </div>
     <div class="inputBox">
        <span>address:</span>
        <input type="text" placeholder="enter your address" name="address">
     </div>
     <div class="inputBox">
        <span>location:</span>
        <input type="text" placeholder="place you want to visit" name="location">
     </div>
     <div class="inputBox">
        <span>guests:</span>
        <input type="number" placeholder="number of guests" name="guests">
     </div>
     <div class="inputBox">
        <span>arrivals:</span>
        <input type="date" name="arrivals">
     </div>
     <div class="inputBox">
        <span>leavings:</span>
        <input type="date" name="leavings">
     </div>
     
     
     </div>
    <Center> <input type="submit" value="submit" class="btn" name="send">
    </Center>
     
  </form>
  </section>











       
    <section class="footer ">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i> Home</a>
                <a href="About.php"> <i class="fas fa-angle-right"></i> About</a>
                <a href="Package.php"> <i class="fas fa-angle-right"></i> package</a>
                <a href="Book.php"> <i class="fas fa-angle-right"></i> Book</a>

            </div>
          
            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i>facebook</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i>instagram</a>
                <a href="#"> <i class="fab fa-linkedin"></i>linkedin </a>
            </div>
    </section>