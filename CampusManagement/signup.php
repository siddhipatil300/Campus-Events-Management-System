<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'D:\xampp\htdocs\CampusManagement\partials\_dbconnect.php';
    $name = $_POST["name"];
    $branch = $_POST["branch"];
    $Cid= $_POST["Cid"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpass= $_POST["cpass"];
   
    $exists=false;
    if(($password == $cpass) && $exists==false){
      $sql= "INSERT INTO `userinfo` (`name`, `branch`, `Cid`, `email`, `password`) VALUES ('$name', '$branch', '$Cid', '$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
    }
    else{
        $showError = "Passwords do not match";
    }
}
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <?php require 'partials/_nav.php'?>
   
   <link rel="stylesheet"  href="signstyle.css" >

   <title>Campus registration form</title>
  
  </head>
  <body>
   
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
 
 <div class="center mt-3">
<h1 class="text-center">Register</h1>
<form action="/CampusManagement/signup.php" method="post">
  <div class="form-group">
    <label for="name" class="form-label">UserName</label>
    <input type="text" class="form-control" id="name" name="name">

 
  </div>
  <div class="form-group">
    <label for="branch" class="form-label">Branch</label>
    <input type="text" class="form-control" id="branch" name="branch">

  
  </div>
  <div class="form-group">
    <label for="Cid" class="form-label">CollegeId</label>
    <input type="text" class="form-control" id="Cid" name="Cid">

  
  </div>
  <div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">

    
  </div>
  <div class="form-group">
          
          <span></span>
          <label>Password</label>
          <input
                  type="password" class="form-control" id="password" name="password" />
        </div>
  <div class="form-group">
    <label for="cpass" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpass" name="cpass">
  </div>
  <input type="submit" value="Register">
  
</form>
</div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
