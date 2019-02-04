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
      <h2 align="center">Blog</h2>
   <div class="row website">
        <div class="col-lg-6">
          <h4>Abc Post</h4>
          <img src="images/header1.png" alt="New York" class="img-responsive">
          <p>Ajax Post</p>
        </div>
        <div class="col-lg-6">
          <h4>Abc Post</h4>
          <img src="images/header2.png" alt="New York" class="img-responsive">
         <p>Ajax Post</p>
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