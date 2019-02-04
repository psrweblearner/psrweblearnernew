
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
<link rel="stylesheet" href="css/monthly.css">
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
		<!-- //market-->
		<div class="market-updates">
			<div class="col-md-3 market-update-gd">
				<div class="market-update-block clr-block-2">
					<div class="col-md-12 market-update-left">
					 <i class="fa fa-user"> </i>
					<h3>13,500</h3>
                    <footer class="footer">
					<p>Total Register Member >></p>
                </footer>
				  </div>
				  <div class="clearfix"> </div>
				</div>
			</div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-12 market-update-left">
                     <i class="fa fa-user"> </i>
                    <h3>13,500</h3>
                    <footer class="footer">
                    <p>Total Register Member >></p>
                </footer>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-12 market-update-left">
                     <i class="fa fa-user"> </i>
                    <h3>13,500</h3>
                    <footer class="footer">
                    <p>Total Register Member >></p>
                </footer>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-3 market-update-gd">
                <div class="market-update-block clr-block-2">
                    <div class="col-md-12 market-update-left">
                     <i class="fa fa-user"> </i>
                    <h3>13,500</h3>
                    <footer class="footer">
                    <p>Total Register Member >></p>
                </footer>
                  </div>
                  <div class="clearfix"> </div>
                </div>
            </div>
			
		   <div class="clearfix"> </div>
		</div>	
		<!-- //market-->
		<div class="row">
			<div class="panel-body">
				<div class="col-md-12 agile-calendar">
            <div class="calendar-widget">
                <div class="panel-heading ui-sortable-handle">
                    <span class="panel-icon">
                      <i class="fa fa-calendar-o"></i>
                    </span>
                    <span class="panel-title"> Calendar Widget</span>
                </div>
                <!-- grids -->
                    <div class="agile-calendar-grid">
                        <div class="page">
                            
                            <div class="w3l-calendar-left">
                                <div class="calendar-heading">
                                    
                                </div>
                                <div class="monthly" id="mycalendar"></div>
                            </div>
                            
                            <div class="clearfix"> </div>
                        </div>
                    </div>
            </div>
        </div> 
			</div>
		</div>
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p align="center">© 2019 Manashkhand. All rights reserved | Design by <a href="http://psrweblearner.co.in">psrweblearner.co.in</a></p>
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
<script type="text/javascript" src="js/monthly.js"></script>
	<script type="text/javascript">
		$(window).load( function() {

			$('#mycalendar').monthly({
				mode: 'event',
				
			});

			$('#mycalendar2').monthly({
				mode: 'picker',
				target: '#mytarget',
				setWidth: '250px',
				startHidden: true,
				showTrigger: '#mytarget',
				stylePast: true,
				disablePast: true
			});

		switch(window.location.protocol) {
		case 'http:':
		case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
		}

		});
	</script>
	<!-- //calendar -->
</body>
</html>
