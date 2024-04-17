
<?php 
 include "config.php";
?>

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
            <!-- <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Orders</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#">Contact</a>
              </li>
            </ul> -->
          </div>
        </div>
      </nav>
   <!-- Home -->
   <section class="">
    <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
    
   <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-touch="false">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="6.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="3.jpg" class="d-block w-100" alt="...">
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

<div class="col-lg-6 col-md-6 col-12 mt-5">

<form method="post" >
 <h2 class="text-center"  >Customer Login</h2>
  <div class="mb-3">
    <label for="">Name</label>
    <input type="text" name="name" id="" placeholder="Customer Name" class="form-control p-1">
  </div>
  <div class="mb-3">
    <label for="">Password</label>
    <input type="text" name="password" id="" placeholder="Password" class="form-control p-1">
  </div>
<div class="R">
  <button class="btn btn-success" name="submit" >Submit</button>
</div>

</form>

<?php 

if(isset($_POST["submit"])){

$Name=$_POST["name"];
$Password=$_POST["password"];

$sql="SELECT*FROM register WHERE name='$Name' and password='$Password' ";

$result=$conn->query($sql);

if($row=$result->fetch_assoc()){

  echo "<script> alert ('login Success'); window.location.replace('index.php')</script>";

}
else{

  echo "<script> alert ('Not Register'); window.location.replace('register.php')</script>";
}



}

?>


</div>


</div>
</section>



    
</body>
</html>