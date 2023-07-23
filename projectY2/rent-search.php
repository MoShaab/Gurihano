<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏠Hoomie</title>
    <link rel="stylesheet" href="assets/css/homepage.css">
     <!-- bootstrap scripts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  

<!-- Font Awesome scripts -->
<script src="https://kit.fontawesome.com/9a6f1c462d.js" crossorigin="anonymous"></script>

<!-- Googel font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Tenor+Sans&family=Yellowtail&display=swap" rel="stylesheet">
</head>
<body>
  <!-- Nav Bar -->
<div class = "menu">
      <nav class="navbar navbar-expand-lg ">
          
   <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
   </button>
   <a class ="navbar-brand" href="rent-search.php">
    <img src="assets/images/logo.png" alt="">
   </a>
          
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
       <ul class="navbar-nav">
         <li class="nav-item">
            <a class="nav-link" href="rent-search.php">Home</a>
          </li>
    <br>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <br>
              <li class="nav-item">
                <a class="nav-link" href="landlord-login.php">Post your house</a>
              </li>
              <br>
              <li class="nav-item">
              <a class="nav-link" href="landlord-register.php">Become a leaser</a>

              </li>
              </ul>
          </div>
        </nav>
 </div>
      <br>
      <br>
        
       <!-- Title -->

    <section id="title">
        <div class ="container-fluid">
   
            <div class = "row">
              <div class =  "col-lg-6">
                <h1>
                    <p><strong>House Hunting Has</strong></p>
                    <p><strong>Never Been Easier!</strong></p>
                </h1>
                <p>We simplified home rentals so that you can focus on</p>
                <p>what is important to you.</p>
                <div class ="searchContainer">
                  <form action="search.php" method="Get">
                  <input class = "searchBox" type="text" name ="term" placeholder="Enter Street, Neighborhood">
                  <input class = "searchButton" type="submit" value ="Search">
                </form>
                </div>
              </div>
              
            
            <div class =  "col-lg-6">
              <img class = "title-image" src="assets/images/house-img.jpeg" alt="">
            </div>
          </div>
        </div>
          </section>
          <section id="features">
<div class = "row">

<div class =  "feature-box col-lg-4">
  <i class=" icon fa-solid fa-check-to-slot fa-4x"></i>
  <h3>Verified landlords and properties.</h3>
  
</div>
    
<div class =  "feature-box col-lg-4">
<i class=" icon fa-sharp fa-solid fa-truck-fast fa-4x"></i>
  <h3>Fast and easy user-interface</h3>
    
</div>
    
    <div class =  "feature-box col-lg-4">
      <i class=" icon fa-sharp fa-solid fa-heart fa-4x"></i>
      <h3>Guaranteed to work.</h3>
    </div>
  </div>
  </section>
  <section id="testimonials">

    <div id="Testimonial-carousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <h2>"I am extremely satisfied with the services provided by this company. From finding the perfect apartment to signing the lease agreement, the entire process was smooth and hassle-free."</h2>
    <img class = "testimonial-img" src="assets/images/me.jpg" alt="">
    <em>Mohamed, Section 3</em>
        </div>
        <div class="carousel-item">
          <h2 class = "testmonial-text">"I have been renting a property through this company for over a year now, and I couldn't be happier with their service."</h2>
          <img class="testimonial-img" src="assets/images/lady-img.jpg" alt="">
          <em> Fatuma, 12th street </em>
      
        </div>
       
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#Testimonial-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" ></span>
        <span >Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#Testimonial-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span>Next</span>
      </button>
    </div>
   
  </section>
  <h3 class = "text-center my-3"> Featured on</h3>
  <section id="press">
    <img class = "press-logo" src="assets/images/bbcsomalilogo.png" alt="bbcsomali-logo">
    <img class = "press-logo" src="assets/images/bizdaily.png" alt="bizdaily-logo">
    <img class = "press-logo" src="assets/images/bizinsider.png" alt="biz-insider-logo">
    <img class = "press-logo" src="assets/images/techcrunch.png" alt="tc-logo">

  </section>
          <section id = "footer">
            <p>© MyHom 2023</p>
            <p>Proudly Created by Mohamed Shaab</p>
          </section>
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>    
</body>
</html>