<!DOCTYPE html>
<?php
session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      <?php
      include_once 'includes/alert.inc.php';
      if(isset($_SESSION['button'])){
        echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Hey There!</strong> Thanks.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
      }
      ?>
            <!-- FORM STARTS HERE -->
             <form class="form-signin text-center col-lg-4 col-sm-10 offset-lg-4" method="POST" action="includes/signin.inc.php">
                <img class="mb-4" src="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Sign In</h1>

                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="useremail" class="form-control" placeholder="Email address" required autofocus>
                <br>

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="userpwd" class="form-control" placeholder="Password" required>
                <br>

                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
              </form>
              <br>
              <form class="form-signin text-center col-lg-4 col-sm-10 offset-lg-4" method="POST" action="signup.php">
              <button class="btn btn-lg btn-dark btn-block">Sign Up</button>
              <p class="mt-5 mb-3 text-muted"><a href="">Recover Password</a></p>
              <p class="mt-5 mb-3 text-muted">&copy; Ehoo Design 2017-2018</p>
              </form>            
              <!-- FORM ENDS HERE -->
    
    
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php
    
    ?>
</body>
</html>