<?php 
include 'connect.php';

$id=$_GET['updateid'];
$sql="SELECT * FROM `crud` WHERE id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $mobile=$_POST['mobile'];
  $password=$_POST['password'];

  $sql="UPDATE `crud` SET id=$id, name='$name', email='$email', mobile='$mobile', password='$password' where id=$id";
  $result=mysqli_query($con,$sql);
  if($result){
    // echo "Update successfully";
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
          <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
        </div>
        <div class="mb-3">
          <label>Email</label>
          <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
        </div>
        <div class="mb-3">
          <label>Mobile</label>
          <input type="text" class="form-control" placeholder="Enter your moile number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
        </div>
        <div class="mb-3">
          <label>Password</label>
          <input type="password" class="form-control" placeholder="Enter your password" name="password" value=<?php echo $password; ?>>
        </div>
          
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
      </form>

    </div>


  </body>
</html>