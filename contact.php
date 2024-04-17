<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#">Sweets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

          </button>
          <div class="collapse navbar-collapse " id="navbarNav";>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.php">Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
   <!-- Contact -->

   <section class="container-fluid mt-5">
    <div><h1>CONTACT US</h1>

    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
    
   <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="12.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="19.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="20.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div> 

<div class="col-lg-6 col-md-6 col-12">

<form class="p-5">
 <h2 class="text-center">Contact Us</h2>

 <div class="row mb-3">
  <div class="col">
    <label for="">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Name" aria-label="First name">
  </div>
  <div class="col">
    <label for="">Password</label>
    <input type="text" class="form-control" name="password" placeholder="Password" aria-label="">
  </div>

</div>

<div class="row">
<div class="col">
  <label for="">Mobile</label>
  <input type="text" class="form-control" name="mobile" placeholder="Mobile" >
</div>
<div class="col">
  <label for="">Email</label>
  <input type="text" class="form-control" name="email" placeholder="Email" name="" id="">

</div>

<div class="R">
  <button class="btn btn-primary mt-4 " name="submit" >Submit</button>
</div>

</div>


</form>


<?php 



?>

</div>



   


<section class="container-fluid mt-5">

  <div class="row">
        
        <div class="col-lg-4 col-md-6 col-12">
            <h3>MENU</h3>
            <ul class="navbar-nav">
               <li class="nav-item"><a  class="nav-link" href="index.php">Home</a></li>
               <li class="nav-item"><a  class="nav-link" href="about.php">About</a></li>
               <li class="nav-item"><a  class="nav-link" href="products.php">Order</a></li>
               <li class="nav-item"><a  class="nav-link" href="register.php">Register</a></li>

            </ul>
        </div>
        <div class="col-lg-4 col-md-6 col-12">
            <h3>Quick Link</h3>
            <ul class="navbar-nav mt-4">
               <li class="nav-item"><a class="nav-link" href="mailto:test@gmail.com">sweets@gmail.com</a></li>
               <li class="nav-item"><a class="nav-link" href="tel:+918976543210">+91 9715818090</a></li>
               <li class="nav-item"><a class="nav-link" href="">Logout</a></li>

            </ul>
        </div>

        <div class="col-lg-4 col-md-6 col-12">
          <div><h3>Map Location</h3></div>
          <div>
      
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15635.438181893842!2d78.07991532713831!3d11.561925040667534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3babe5c96bd675dd%3A0xe905f5e2a8ce5030!2sPalampatti%2C%20Tamil%20Nadu%20636308!5e0!3m2!1sen!2sin!4v1699725159277!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
    </div>

</section>

</div>
</div>
</section>
    
</body>
</html>