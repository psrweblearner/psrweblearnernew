<!DOCTYPE html>
<html>
<head>
  <title>Web Learner</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 

<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- //font-awesome icons -->

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
          <?php include("includes/navigation.php");?>    
        </nav>  

<div class="container" id="fulldiv">
    <div class="col-lg-8" id="content">
      <div class="row" id="carousel">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="images/header1.png" alt="Chania">
      
    </div>

    <div class="item">
      <img src="images/header1.png" alt="Chicago">
      
    </div>

    <div class="item">
      <img src="images/header1.png" alt="New York">
      
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
      </div>
      <div class="row" id="carousel">
        <h1 align="center">Feel Relax With Responsive & Dynamic Website.</h1>
        <h4>Why Important?</h4>
        <p align="justify">Having a website and online presence strategy allows you to market your business online.If you have a business and don’t have a website, you are losing out on great opportunities for your business. A website itself can be used to accomplish many different marketing strategies to help your business grow. Web designing is the process of creating websites. Web designing is an important factor in this present era of online revolution. A finely built site help you secure a remarkable position in your area of business.Responsive site development ensures your website content appears across all devices.</p>
      </div>
      <div class="row website">
        <h2 align="center">Websites</h2>
        <div class="col-lg-6">
          <img src="images/header1.png" alt="New York" class="img-responsive">
        </div>
        <div class="col-lg-6">
          <img src="images/header2.png" alt="New York" class="img-responsive">
        </div>
        <div class="col-lg-6">
          <img src="images/header3.png" alt="New York" class="img-responsive">
        </div>
        <div class="col-lg-6">
          <img src="images/header4.png" alt="New York" class="img-responsive">
        </div>
      </div>
</div>

    <!-- ==================side section finished here====================== -->
    <!-- ==================================================================== -->
    <div class="col-lg-4 jumbotron">
      <?php include("includes/sidebar.php");?>
    </div>
    
</div>
<div class="container-fluid footer">
  <?php include("includes/footer.php");?>
</div>
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/bootstrap.js"></script>

<script src="js/externel.js"></script>


</body>
</html>