<?php 
include 'connect.php';

if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="INSERT INTO `crud` (name, email, mobile, password) values('$name', '$email', '$mobile', '$password')";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Data inserted successfully";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}



?>







<!doctype html>
<html lang="en">
  <head>
    
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    
    <div class="container my-5">
      
      <form method="post">
        <div class="mb-3">
          <label>Name</label>
          <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
        </div>
        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your mobile number" name="email" autocomplete="off">
        </div>
        <div class="mb-3">
          <label>Mobile</label>
          <input type="text" class="form-control" placeholder="Enter your email" name="mobile" autocomplete="off">
        </div>
        <div class="mb-3">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter your password" name="password">
        </div>
          
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
      </form>

    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>