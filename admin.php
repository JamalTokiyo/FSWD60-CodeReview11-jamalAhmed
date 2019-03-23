
<?php


require_once "dbconnect.php";

  error_reporting(E_ALL);
ini_set('display_errors', 1);

  if(isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]i#","", $search);
    $res=mysqli_query($connect, "SELECT * FROM restaurant WHERE rName LIKE '%".$search."%'");
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res);

   
    
    if($count == 0){
      $output = "There was no search results!";

    }else{

      while ($row = mysqli_fetch_array($res)) {

        $rname = $row ['rName'];
        $address = $row ['address'];
        $tel = $row ['tel'];
         

       $count.= '<div> '.$rname.' '.$address.''.$tel.'</div>';

      }

    }
  }

  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title>Adventure</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg lead">
    <div class="container">
        <a class="navbar-brand" href="index.php">Get your Guide</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="sightseeing.php">Sightseeing <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="events.php">Concerts</a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="restaurents.php">Restaurant</a>
                </li>
            </ul>

            

            <?php

require_once 'dbconnect.php';


$res=mysqli_query($connect, "SELECT * FROM users WHERE userId=1");
$userRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

?>
    admin: <?php echo $userRow['userEmail']; ?>
            
           <a href="logout.php?logout" style="float:right;color:yellow">Sign Out</a>
  
        </div>
    </div>
</nav>
<section class="jumbotron text-center" id="jumbo">
    <div class="container">
       
        <h1 class="jumbotron-heading">Vienna  Tours  </h1>
        <p class="lead ">Popular Tours in Vienna !</p>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h2>
                        Popular sightseeing in Vienna.
                   </h2>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="container">
   
   <div class="row">
  <div class="col-sm-6 col-lg-4">
    <div class="thumbnail">
      <img src="img/karkskirche.jpg" alt="karlskirche" >
      <div class="caption">
         <?php
     
           $sql = "SELECT * FROM `sightseeing` WHERE sName='St. Charles Church'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h2>".$row['sName']. "</h2>"
                        ."<li style='margin-left:20px;'>".$row['address']."</li>"
                       ."<li style='margin-left:20px;'>".$row['type']."</li>"
                        ."<li style='margin-left:20px;'>".$row['descript']."</li>"
                        
                   ;
               }
            
           ?>
            <a href="delete.php?rName='.$row['sName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
          <br><br>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/kursalon.jpg" alt="kursalon">
      <div class="caption">
       
         <?php
     
           $sql = "SELECT * FROM `sightseeing` WHERE sName='Kusolon'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h2>".$row['sName']. "</h2>"
                        ."<li style='margin-left:20px;'>".$row['address']."</li>"
                       ."<li style='margin-left:20px;'>".$row['type']."</li>"
                        ."<li style='margin-left:20px;'>".$row['descript']."</li>"
                        
                   ;
               }
           
           ?>
               <a href="delete.php?rName='.$row['sName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
          <br><br>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/stannachurch.jpg" alt="st.Anna church" >
      <div class="caption">
       <?php
     
           $sql = "SELECT * FROM `sightseeing` WHERE sName='St.Anna church'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h2>".$row['sName']. "</h2>"
                        ."<li style='margin-left:20px;'>".$row['address']."</li>"
                       ."<li style='margin-left:20px;'>".$row['type']."</li>"
                        ."<li style='margin-left:20px;'>".$row['descript']."</li>"
                        
                   ;
               }
           
           ?>
            <a href="delete.php?rName='.$row['sName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
          <br><br>
      </div>
    </div>
  </div>
</div><br><br>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/shonbrunn.jpg" alt="shonbrunn">
      <div class="caption">
       <?php
     
           $sql = "SELECT * FROM `sightseeing` WHERE sName='St.Anna church'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h2>".$row['sName']. "</h2>"
                        ."<li style='margin-left:20px;'>".$row['address']."</li>"
                       ."<li style='margin-left:20px;'>".$row['type']."</li>"
                        ."<li style='margin-left:20px;'>".$row['descript']."</li>"
                        
                   ;
               }
           
           ?>
         <a href="delete.php?rName='.$row['sName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/segway.jpg" alt="segway">
      <div class="caption">
       <?php
     
           $sql = "SELECT * FROM `sightseeing` WHERE sName='segway'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h2>".$row['sName']. "</h2>"
                       ."<div class='list'>"
                        ."<li style='margin-left:20px;'>".$row['address']."</li>"
                       ."<li style='margin-left:20px;'>".$row['type']."</li>"
                        ."<li style='margin-left:20px;'>".$row['descript']."</li>"."</div>"
                        
                   ;
               }
           
           ?>
         <a href="delete.php?rName='.$row['sName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/schloss.jpg" alt="schloss">
      <div class="caption">
       <?php
     
           $sql = "SELECT * FROM `sightseeing` WHERE sName='schloss schonburn'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h2>".$row['sName']. "</h2>"
                        ."<li style='margin-left:20px;'>".$row['address']."</li>"
                       ."<li style='margin-left:20px;'>".$row['type']."</li>"
                        ."<li style='margin-left:20px;'>".$row['descript']."</li>"
                        
                   ;
               }
           
           ?>
            <a href="delete.php?rName='.$row['sName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
      </div>
    </div>
  </div>
</div><br>

  <!-- concerts beginns here-->
  <nav  aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h2>Some restaurants in Vienna.
                   </h2>
                </ol>
            </nav>
            <!--cards here-->
            <div class="card-deck">
  <div class="card">
    <img src="img/lemon.png" class="card-img-top" alt="lemonrestaurent">
    <div class="card-body">
     <?php
    

           $sql = "SELECT * FROM `restaurant` WHERE tel=015812308";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h3>".$row['rName']. "</h3>"
                        ."<li >".$row['address']."</li>"
                       ."<li>".$row['descript']."</li>"
                        ."<li>".$row['tel']."</li>"
                        ."<li>".$row['webaddress']."</li>"
                   ;
               }
           
           ?>
 <a href="delete.php?rName='.$row['sName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
          <br><br>
    </div>
  </div>
  <div class="card">
    <img src="img/sixta.png" class="card-img-top" alt="sixta restaurant">
    <div class="card-body">
      <?php
     
           $sql = "SELECT * FROM `restaurant` WHERE rname='sixta'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h3>".$row['rName']. "</h3>"
                        ."<li>".$row['address']."</li>"
                       ."<li>".$row['descript']."</li>"
                        ."<li>".$row['tel']."</li>"
                        ."<li>".$row['webaddress']."</li>"
                   ;
               }
           
           ?>
            <a href="delete.php?rName='.$row['rName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
    </div>
  </div>
  <div class="card">
    <img src="img/burjalarab.jpg" class="card-img-top" alt="burjalrab">
    <div class="card-body">
             <?php
     require_once'dbconnect.php';
           $sql = "SELECT `rName`, `address`, `tel`, `descript`, `webaddress` FROM `restaurant` WHERE rName='Burj Al arab'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h3>".$row['rName']. "</h3>"
                        ."<li>".$row['address']."</li>"
                       ."<li>".$row['descript']."</li>"
                        ."<li>".$row['tel']."</li>"
                        ."<li>".$row['webaddress']."</li>"
                   ;
               }
            else {
               echo "<h2>No Data Avaliable</h2>";
           }
           ?>
            <a href="delete.php?rName='.$row['rName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
    </div>
  </div>
</div><br>
<nav  aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <h2>Concerts  in Vienna.
                   </h2>
                </ol>
            </nav>
            <!--cards of concerts here-->
            <div class="card-deck">
  <div class="card">
    <img src="img/kristof.jpg" class="card-img-top" alt="kristof">
    <div class="card-body">
      <?php
     
           $sql = "SELECT * FROM `concerts` WHERE cname='Kris Kristofferson'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h3>".$row['cName']. "</h3>"
                        ."<li>".$row['address']."</li>"
                       ."<li>".$row['event']."</li>"
                        ."<li>".$row['descript']."</li>"
                        ."<li>".$row['preis']."</li>"
                   ;
           }
           ?> 
            <a href="delete.php?rName='.$row['cName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/concert.jpg" class="card-img-top" alt="amsterdam sumer concerts">
    <div class="card-body">
       <?php
     
           $sql = "SELECT * FROM `concerts` WHERE cname='Cebouw'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h3>".$row['cName']. "</h3>"
                        ."<li>".$row['address']."</li>"
                       ."<li>".$row['event']."</li>"
                        ."<li>".$row['descript']."</li>"
                        ."<li>".$row['preis']."</li>"
                   ;
           }
           ?> 
            <a href="delete.php?rName='.$row['cName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
           <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/lenny.jpg" class="card-img-top" alt="lenny live music">
    <div class="card-body">
       <?php
     
           $sql = "SELECT * FROM `concerts` WHERE cname='Lenny Kravitz'";
           $result = $connect->query($sql);

           if($result->num_rows > 0) {
               $row = $result->fetch_assoc();
                   echo 
                       "<h3>".$row['cName']. "</h3>"
                        ."<li>".$row['address']."</li>"
                       ."<li>".$row['event']."</li>"
                        ."<li>".$row['descript']."</li>"
                        ."<li>".$row['preis']."</li>"
                   ;
           }
           ?>
            <a href="delete.php?rName='.$row['cName'].'" class="btn btn-danger" style="margin-left:20px;">Delete</a>
         <a href="#" class="btn btn-warning" style="margin-left:20px;">update</a>
          <a href="#" class="btn btn-info" style="margin-left:20px;">Create</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>


          </div><br>



<!-- Footer -->
<footer class="text-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-lg-4 col-xl-3">
                <h5>About</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <p class="mb-0">
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
                </p>
            </div>

            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto">
                <h5>Informations</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="restaurents.php">Restaurant</a></li>
                    <li><a href="events.php">Concern</a></li>
                    <li><a href="sightseeing.php">Sightseeing</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto">
                <h5>Others links</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><a href="">Link 1</a></li>
                    <li><a href="">Link 2</a></li>
                    <li><a href="">Link 3</a></li>
                    <li><a href="">Link 4</a></li>
                </ul>
            </div>

            <div class="col-md-4 col-lg-3 col-xl-3">
                <h5>Contact</h5>
                <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                <ul class="list-unstyled">
                    <li><i class="fa fa-home mr-2"></i> Jamal Ahmed</li>
                    <li><i class="fa fa-envelope mr-2"></i> jamalusb@yahoo.com</li>
                    <li><i class="fa fa-phone mr-2"></i> + 43 660 698 888 28</li>
                    <li><i class="fa fa-print mr-2"></i> + 43 660 698 888 28</li>
                </ul>
            </div>
            <div class="col-12 copyright mt-3">
                <p class="float-right">
                    <a href="#">Back to top</a>
                </p>
               
            </div>
        </div>
    </div>
</footer>
</body>
</html>