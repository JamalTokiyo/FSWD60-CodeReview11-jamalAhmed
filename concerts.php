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
<style>
  #jumbo{
    background-image: url('img/concert.jpg');
    background-size: cover;
    height: 400px;
}
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg lead">
    <div class="container">
        <a class="navbar-brand" href="index.html">Get your Guide</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="sightseeing.php">Sightseeing <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="concerts.php">Concerts</a>
                </li>
                
                <li class="nav-item active">
                    <a class="nav-link" href="restaurents.php">Restaurant</a>
                </li>
            </ul>

            
        </div>
    </div>
</nav>
<section class="jumbotron text-center" id="jumbo">
    <div class="container">
       
        <h1 class="jumbotron-heading">Concerts in Vienna  </h1>
        <p class="lead">Popular Tours in Vienna !</p>
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
        <h3>Thumbnail label</h3>
        <p>...</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/kursalon.jpg" alt="kursalon">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/stannachurch.jpg" alt="st.Anna church" >
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/shonbrunn.jpg" alt="shonbrunn">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/segway.jpg" alt="segway">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="img/schloss.jpg" alt="schloss">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>...</p>
        
      </div>
    </div>
  </div>
</div><br>
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
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/sixta.png" class="card-img-top" alt="sixta restaurant">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/burjalarab.jpg" class="card-img-top" alt="burjalrab">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
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
     require_once'dbconnect.php';
           $sql = "SELECT * FROM `restaurant` WHERE tel=015812308";
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

    </div>
  </div>
  <div class="card">
    <img src="img/sixta.png" class="card-img-top" alt="sixta restaurant">
    <div class="card-body">
      <?php
     require_once'dbconnect.php';
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
            else {
               echo "<h2>No Data Avaliable</h2>";
           }
           ?>
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
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/concert.jpg" class="card-img-top" alt="amsterdam sumer concerts">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/lenny.jpg" class="card-img-top" alt="lenny live music">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
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
                    <li><a href="concerts.php">Concern</a></li>
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