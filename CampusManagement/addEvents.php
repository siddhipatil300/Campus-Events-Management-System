
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Add Events</title>
  </head>
  <body>
  <?php require 'partials/_nav.php'?>
  <link rel="stylesheet"  href="signstyle.css" >
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        include 'D:\xampp\htdocs\CampusManagement\partials\_dbconnect.php';

        $Ename =  $_POST['Ename'];
        $Edate = $_POST['Edate'];
        $Eduration =  $_POST['Eduration'];
        $Eincharge = $_POST['Eincharge'];
        $dept = $_POST['dept'];
       
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your Details has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      // Submit these to a database
      $sql = "INSERT INTO events  VALUES ('$Ename', 
      '$Edate','$Eduration','$Eincharge','$dept')";
    $conn = mysqli_connect($server, $username, $password, $database);
  if(mysqli_query($conn, $sql))
  {
    echo "<script>alert('new record inserted')</script>";
}
else
{

echo "error:".mysqli_error($con);
    }
mysqli_close($con);
}  
  
    

    
?>

<div class="container mt-3">

<form action="/CampusManagement/homepg.php" method="post">
    <div class="center mt-3">
<h1 class="text-center">Add Events</h1>
<form action="/CampusManagement/addEvents.php" method="post">
  <div class="form-group">
    <label for="Ename" class="form-label">Event name</label>
    <input type="text" class="form-control" id="Ename" name="Ename">

 
  </div>
  <div class="form-group">
    <label for="Edate" class="form-label">Event date</label>
    <input type="number" class="form-control" id="Edate" name="Edate">

  
  </div>
  <div class="form-group">
    <label for="Eduration" class="form-label">Event Duration</label>
    <input type="text" class="form-control" id="Eduration" name="Eduration">

  
  </div>
  
  <div class="form-group">
    <label for="Eincharge" class="form-label">Event Incharge</label>
    <input type="text" class="form-control" id="Eincharge" name="Eincharge">
  </div>
  <div class="form-group">
    <label for="dept" class="form-label">dept</label>
    <input type="text" class="form-control" id="dept" name="dept">
  </div>
  <br>
  <button type="submit" class="btn btn-primary form-group">Submit</button>
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

