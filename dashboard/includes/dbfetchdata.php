<?php 
require("db/db.php");
date_default_timezone_set("Asia/Calcutta");
$oper = $_REQUEST['oper'];
if($oper == "SELECT_DETAILCONTACT"){
	$query = "SELECT * FROM contact ORDER BY `id` DESC";
	$result = mysqli_query($con, $query ) or die( 'MySQL Error: ' . mysqli_errno($con) );
$output = array("aaData" => array());
	$sl_no = 1;
	while( $row = mysqli_fetch_assoc( $result ) )

	{
		$row1 = array();
		$row1[0] = $sl_no;
		$row1['sl_no'] = $sl_no;
		$row1[1] = $row['name'];
		$row1['name'] = ucwords($row['name']);
		$row1[2] = $row['email'];
		$row1['email'] = $row['email'];
		$row1[3] = $row['subject'];
		$row1['subject'] = $row['subject'];
		$row1[4] = $row['message'];
		$row1['message'] = $row['message'];
		$row1[5] = $row['date'];
		$row1['date'] = $row['date'];
		$output['aaData'][] = $row1;
		$sl_no ++;
	}

mysqli_close($con);
	
echo json_encode( $output );

}
else if($oper == "GET_SLIDER"){

$query = "SELECT * FROM banners ORDER BY id DESC";
$result=mysqli_query($con,$query);
 $rowcount=mysqli_num_rows($result);
$output = '';
 $output .= '
 <table class="table table-bordered table-striped">
  <tr>
   <th>Sr. No</th>
   <th>Image</th>
   <th>Name</th>
   <th>Delete</th>
  </tr>
';
 if($rowcount > 0)
{
 $count = 0;
 foreach($result as $row)
 {
  $count ++; 
  $output .= '
  <tr>
   <td>'.$count.'</td>
   <td><img src="images/banner/'.$row["images"].'" class="img-thumbnail" width="100" height="100" /></td>
   <td>'.$row["images"].'</td>
   <td><button type="button" class="btn btn-danger btn-xs delete" id="'.$row["id"].'" data-image="'.$row["images"].'">Delete</button></td>
  </tr>
  ';
 }
}
else
{
 $output .= '
  <tr>
   <td colspan="6" align="center">No Data Found</td>
  </tr>
 ';
}
$output .= '</table>';
echo $output;

}

else if($oper =="UPLOADING_SLIDER"){
$date = date("d-m-Y  h:i A");
if(count($_FILES["file"]["name"]) > 0)
{
 //$output = '';
 sleep(3);
 for($count=0; $count<count($_FILES["file"]["name"]); $count++)
 {
  $file_name = $_FILES["file"]["name"][$count];
  $file_name =preg_replace("/\s+/","_",$file_name);
  $tmp_name = $_FILES["file"]['tmp_name'][$count];
  $file_array = explode(".", $file_name);
  $file_extension = end($file_array);
$location = '../images/banner/' . $file_name;
  if(move_uploaded_file($tmp_name, $location))
  {
   echo $query = "INSERT INTO banners (images,`date`) VALUES ('$file_name','$date')";
   if(mysqli_query($con, $query))

		echo 'success';

	else

		echo 'error';
  
  }
 }
}
}


else if($oper =="DELETE_SLIDER"){
	 $file_path = '../images/banner/' . $_REQUEST["image_name"];
 if(unlink($file_path))
 {
  $query = "DELETE FROM banners WHERE id = '".$_REQUEST["image_id"]."'";
  if(mysqli_query($con, $query))

		echo "Deleted";

	else

		echo "Please select a message unable to Remove";

	mysqli_close($con);
 }
}
else if($oper =="SETWEBSITEDATA"){
	$date = date("d-m-Y  h:i A");
	$webimage = $_FILES['webimage']['name'];
	$webimage_tmp= $_FILES['webimage']['tmp_name'];
	$webname = mysqli_escape_string($con,$_REQUEST['webname']);
	$weblink = mysqli_escape_string($con,$_REQUEST['weblink']);
	$webdesc = mysqli_escape_string($con,$_REQUEST['webdesc']);
	$webdesc = str_replace("'", "", $webdesc);
	{
	move_uploaded_file($webimage_tmp,"../images/website/$webimage");
}
$query ="insert into web_project(image,name,link,desc,date) values ('$webimage','$webname','$weblink','$webdesc','$date')";
$run = mysqli_query($con,$query);
if($run){
	echo"Data Insert";
		}
}
?>