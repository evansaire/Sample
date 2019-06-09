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
      ?>

          <!-- LOGO -->
           
            <!-- LOGO ENDS HERE -->


            <!-- FORM STARTS HERE -->
            <form class="form-signin text-center col-lg-4 offset-lg-4" method="POST" action="includes/signup.inc.php">
                <img class="mb-4" src="" width="72" height="72">
                <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>

                <label for="inputEmail" class="sr-only">First Name</label>
                <input type="text" name="userfirstname" class="form-control" placeholder="First Name" required>
                <br>

                <label for="inputEmail" class="sr-only">Last Name</label>
                <input type="text" name="userlastname" class="form-control" placeholder="Last Name" required>
                <br>
                
                

                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" name="useremail" class="form-control" placeholder="Email address" required>
                <br>

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="userpwd" class="form-control" placeholder="Password" required>
                <br>

                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" name="userretypepwd" class="form-control" placeholder="Re-Enter Password" required>
                

                <br>
                <button class="btn btn-lg btn-primary btn-block" type="submit" name="signup"> Sign Up</button>

                <p class="mt-5 mb-3 text-muted">&copy; Ehoo Designs 2017-2018</p>
              </form>
              <!-- FORM ENDS HERE -->
    
    <?php
    session_unset();
    session_destroy();
    ?>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>