
<!DOCTYPE html>
<head>
<title>Weblearner</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<link href="css/style.css" rel='stylesheet' type='text/css' /> 
<link href="css/style-responsive.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
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
    <h3 align="center">Home Page Slider </h3>
   <br />
   <div align="right">
    <input type="file" name="multiple_files" id="multiple_files" multiple />
    <span class="text-muted">Only .jpg, png, .gif file allowed</span>
    <span id="error_multiple_files"></span>
   </div>
	<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#slide">Slider</a></li>
</ul>

<div class="tab-content">
  <div id="slide" class="tab-pane fade in active">
    <div class="table-responsive" id="image_table">
    
   </div>
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

</body>
</html>
<script>
$(document).ready(function(){
 load_image_data();
 function load_image_data()
 {
  $.ajax({
   url:"includes/dbfetchdata.php",
   method:"POST",
   data: "oper=GET_SLIDER",
   success:function(data)
   {
    $('#image_table').html(data);
   }
  });
 } 
 $('#multiple_files').change(function(){
  var error_images = '';
  var form_data = new FormData();
  var files = $('#multiple_files')[0].files;
  if(files.length > 10)
  {
   error_images += 'You can not select more than 10 files';
  }
  else
  {
   for(var i=0; i<files.length; i++)
   {
    var name = document.getElementById("multiple_files").files[i].name;
    var ext = name.split('.').pop().toLowerCase();
    if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1) 
    {
     error_images += '<p>Invalid '+i+' File</p>';
    }
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("multiple_files").files[i]);
    var f = document.getElementById("multiple_files").files[i];
    var fsize = f.size||f.fileSize;
    if(fsize > 20000000)
    {
     error_images += '<p>' + i + ' File Size is very big</p>';
    }
    else
    {
     form_data.append("file[]", document.getElementById('multiple_files').files[i]);
    }
   }
  }
  if(error_images == '')
  {
   $.ajax({
    url:"includes/dbfetchdata.php?oper=UPLOADING_SLIDER",
    method:"POST",
    data: form_data,
    contentType: false,
    cache: false,
    processData: false,
    beforeSend:function(){
     $('#error_multiple_files').html('<br /><label class="text-primary">Uploading...</label>');
    },   
    success:function(data)
    {
     $('#error_multiple_files').html('<br /><label class="text-success">Uploaded</label>');
     load_image_data();
    }
   });
  }
  else
  {
   $('#multiple_files').val('');
   $('#error_multiple_files').html("<span class='text-danger'>"+error_images+"</span>");
   return false;
  }
 });  
 
 $(document).on('click', '.delete', function(){
  var image_id = $(this).attr("id");
  var image_name = $(this).data("image");
  
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"includes/dbfetchdata.php",
    method:"POST",
    data:{oper:"DELETE_SLIDER",image_id:image_id, image_name:image_name},
    success:function(data)
    {
     load_image_data();
     
    }
   });
  }
 }); 
  
});
</script>