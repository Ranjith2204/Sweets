
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
<style>
  img {
 
    max-width: 100%;
    height: auto;
    

  }
</style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
          <a class="navbar-brand" href="#">Sweets</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>

          </button>
          <div class="collapse navbar-collapse " id="navbarNav";>
      
          </div>
        </div>
      </nav>
   <!-- login -->
   <section class="one">
    
  <div class="row">
    <!-- <img src="16.jpg" alt=""> -->
   <div class="col-lg-3 col-md-4 col-12 mt-3">
      </div>

<div class="col-lg-6 col-md-4 col-12 mt-3">

<form class="move" style="align-items: center;" method="post" >
 <h2 class="text-center" >Customer Register</h2>
  <div class="mb-3">
    <label for="">Name</label>
    <input type="text" name="name" id="" placeholder="Customer Name" class="form-control p-1">
  </div>
  <div class="mb-3">
    <label for="">Mobile</label>
    <input type="text" name="mobile" id="" placeholder="Mobile" class="form-control p-1">
  </div>
  <div class="mb-3">
    <label for="">Email</label>
    <input type="email" name="email" id="" placeholder="Email" class="form-control p-1">
  </div>

  <div class="mb-3">
    <label for="">Password</label>
    <input type="text" name="password" id="" placeholder="Password" class="form-control p-1">
  </div>

<div class="R">
  <button class="btn btn-primary" name="add">Submit</button>
</div>

</form>

            <div class="new-account mt-3">
                <p style="font-size: medium;">Already have an account? <a class="text-primary" href="login.php">Sign in</a></p>
                </div>
</div>

<?php 
if(isset($_POST["add"])){

$Name=$_POST["name"];
$Mobile=$_POST["mobile"];
$Email=$_POST["email"];
$Password=$_POST["password"];

$sql= "INSERT INTO register (id, name, mobile, email, password) VALUES(NULL,'$Name', '$Mobile', '$Email', '$Password')";

if($conn->query($sql)){

  echo "<script> alert ('Register Successfully');window.location.replace('login.php');</script>";
}
else{

  echo "<script> alert ('Register faliure');window.location.replace('register.php')</script>";

}
}

?>

<div class="col-lg-3 col-md-4 col-12 mt-3">
</div>


</div>
</section>
</body>
</html>