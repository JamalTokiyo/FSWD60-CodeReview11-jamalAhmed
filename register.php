<?php
ob_start();
session_start(); // start a new session or continues the previous

include_once 'dbconnect.php';
$error = false;
if ( isset($_POST['btn-signup']) ) {
 
 $name = trim($_POST['name']);

  $name = strip_tags($name);


  $name = htmlspecialchars($name);
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);

 // basic name validation
 if (empty($name)) {
  $error = true;
  $nameError = "Please enter your full name.";
 } else if (strlen($name) < 3) {
  $error = true;
  $nameError = "Name must have at least 3 characters.";
 } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
  $error = true;
  $nameError = "Name must contain alphabets and space.";
 }

 
 if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 } else {
  // checks whether the email exists or not
  $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
  $result = mysqli_query($connect, $query);
  $count = mysqli_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Provided Email is already in use.";
  }
 }

 if (empty($pass)){
  $error = true;
  $passError = "Please enter password.";
 } else if(strlen($pass) < 6) {
  $error = true;
  $passError = "Password must have atleast 6 characters.";
 }


$password = hash('sha256', $pass);


 if( !$error ) {
  
  $query = "INSERT INTO users(userName,userEmail,userPass) VALUES('$name','$email','$password')";
  $res = mysqli_query($connect, $query);
  
  if ($res) {
   $errTyp = "success";
   $errMSG = "Successfully registered, you may login now";
   unset($name);
   unset($email);
   unset($pass);
  } else {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later...";
  }
  
 }


}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login & Registration System</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 
</head>
<body style="background-color: #079992;">
   <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
  
      
            <h1 style=" text-align: center;font-size: 27px;color:white" class="lead">Create your Account here.</h1>
                   <a href="login.php" style="background-color: white; font-size: 19px;text-decoration: none;float: right;">Sign in your Account here! </a>  
          
           <?php
   if ( isset($errMSG) ) {
  
   ?>
           <div class="alert alert-<?php echo $errTyp ?>">
                        <?php echo $errMSG; ?>
       </div>

<?php
  }
  ?>
       
      
 <div class="col-md-4 col-md-offset-4" id="login">
            <section id="inner-wrapper" class="login">
              <article>
                <form>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user"> </i></span>
                      <input type="text" class="form-control" placeholder="Name" name="name">
                      <span class="text-danger"><?php echo $nameError ; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope"> </i></span>
                      <input type="email" class="form-control" placeholder="Email Address" name="email">
                            <span class="text-danger"><?php echo $emailError ; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-key"> </i></span>
                      <input type="password" class="form-control" placeholder="Password" name="pass">
                       <span class="text-danger"><?php echo $passError; ?></span>
                    </div>
                  </div>
                  <div class="form-group">
                   
                  </div>
                    <button type="submit" class="btn btn-warning btn-block" name="btn-signup">Submit</button>
                </form>
              </article>
            </section></div>
           

</body>
</html>
<?php ob_end_flush(); ?>

