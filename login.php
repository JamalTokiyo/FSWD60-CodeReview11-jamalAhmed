

<?php
ob_start();

require_once 'dbconnect.php';

// it will never let you open index(login) page if session is set


if( isset($_POST['login']) ) {

 // prevent sql injections/ clear user invalid inputs
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // prevent sql injections / clear user invalid inputs

 if(empty($email)){
  $error = true;
  $emailError = "Please enter your email address.";
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 }

 if(empty($pass)){
  $error = true;
  $passError = "Please enter your password.";
 }

 // if there's no error, continue to login
 if (!$error) {
  
  $password = hash('sha256', $pass); // password hashing

  $res=mysqli_query($connect, "SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row
  
  if( $count == 1 && $row['userPass']==$password ) {
   $_SESSION['user'] = $row['userId'];
   header("Location: admin.php");
  } else {
   $errMSG = "Incorrect Credentials, Try again...";
  }
  
 }

}
?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <title>Login page</title>
   
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="index.php">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item ">
                    <a class="nav-link disabled" style="cursor: no-drop">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register.php">Register</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<main class="login-form">
    <div class="cotainer">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="background-color:#dff9fb;">
                    <div class="card-header">Register</div>
                   
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off" method="post">
                                        
                                       <?php
                              if ( isset($errMSG) ) {
                            echo $errMSG; ?>
                                          
                                           <?php
                              }
                              ?>
                            <div class="form-group row">
                                <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                                <div class="col-md-6">
                                    <input type="text"  class="form-control" name="email" required autofocus>
                                      <span class="text-danger"><?php echo $emailError; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                <div class="col-md-6">
                                    <input type="password" class="form-control" name="pass" required>
                                        <span class="text-danger"><?php echo $passError; ?></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block" name="login">Submit</button>
                                 
                                </button><br>
                               <p>New here?<a href="register.php"> Create an account</a></p> 
                                   
                                
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

</main>

</body>
</html>
<?php ob_end_flush(); ?>