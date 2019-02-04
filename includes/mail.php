<?php
require("db/db.php");
$oper= $_REQUEST['oper'];
if($oper =="CONTACT_SUBMIT"){
$errorMSG = "";

// NAME
date_default_timezone_set("Asia/Calcutta");
$date = date("d-m-Y h:i A");
$name = mysqli_escape_string($con,$_REQUEST['name']);
$email = mysqli_escape_string($con,$_REQUEST['email']);
$subject = mysqli_escape_string($con,$_REQUEST['subject']);
$message = mysqli_escape_string($con,$_REQUEST['message']);
$message = str_replace("'", "", $message);

 $query =" INSERT INTO `contact`(`name`, `email`, `subject`, `message`, `date`) VALUES ('$name','$email','$subject','$message','$date')";
if(mysqli_query($con, $query)){
	$EmailTo = "psrweblearner1471996@gmail.com";
// 	$EmailTo = "singhpushkar44@gmail.com";
$Subject = "Psrweblearner";


// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
}
else{
		echo 'error';
	}
}
// else if($oper =="GET_SLIDER"){
// 	$query ="SELECT * from banners";
// 	$run_query = mysqli_query($con,$query);
// 	while($row = mysqli_fetch_array($run_query)){
		
// 	}
// }

?>