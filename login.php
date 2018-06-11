<?php 
 require "InstagramAPI.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Instagram Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-top:100px;">
      <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3 mt-3" align="center">
          <form>
            <input class="form-control" type="email" name="email" placeholder="Email..."><br>
            <input class="form-control" type="password" name="password" placeholder="Password..."><br>
            <input type="submit" name="" value="Log In">
            <input onclick="javascript:window.location = '<?php echo $Instagram->getLoginURL() ?>';" type="button" name="" value="Log In With Instagram">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
