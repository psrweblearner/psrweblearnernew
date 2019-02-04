
<!DOCTYPE html>
<head>
<title>Weblearner</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link href="css/style.css" rel='stylesheet' type='text/css' /> 
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href="css/style-responsive.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
 <link rel="stylesheet" href="css/external.css"> 
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<?php include('includes/header.php');?>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
  <?php include('includes/menu.php');?>  
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
	<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#webProject">Edit Web Project</a></li>
  <li><a data-toggle="tab" href="#webInsertProject">Insert New Project</a></li>
  
</ul>

<div class="tab-content">
  <div id="webProject" class="tab-pane fade in active">
    
  </div>
  <div id="webInsertProject" class="tab-pane fade">
    <h1 align="center" id="error"></h1>
    <form method="POST">
      Website Image
      <input type="file" class="form-control" id="webimage">
      <p id="webimageError"></p>
      <br>
      Website Name
      <input type="text" class="form-control" id="webname">
      <p id="webnameError"></p>
      <br>
      Website Link
      <input type="text" class="form-control" id="weblink">
      <p id="weblinkError"></p>
      <br>
      Website Description
      <textarea class="form-control" id="webdesc"></textarea>
      <p id="webdescError"></p>
      <br>
      <input type="button" class="btn btn-success form-control" value="Submit" id="WebSubmit">
    </form>
  </div>
  
</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p align="center">© 2019 Weblearner. All rights reserved | Design by <a href="http://psrweblearner.co.in">psrweblearner.co.in</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.nicescroll.js"></script> 
<script src="js/external.js"></script> 
</body>
</html>
