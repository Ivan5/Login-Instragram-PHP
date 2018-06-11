<?php 
  session_start(); 
  if(!isset($_SESSION['loggedIn'])){
    header('Location: login.php');
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-3" align="center">
        <img src="<?php echo $_SESSION['profilePicture'] ?>" alt="">
      </div>
      <div class="col-md-9" align="center">
        ID: <?php echo $_SESSION['id']?><br>
        Name: <?php echo $_SESSION['username']?><br>
        Full Name: <?php echo $_SESSION['fullName']?><br>
      </div>
    </div>
  </div>
</body>
</html>