<?php 
if(isset($_POST["csave"]))
{
$name=$_POST["name"];
$mobno=$_POST["mobno"];
$email=$_POST["email"];
$sub=$_POST["sub"];
$msg=$_POST["message"];
date_default_timezone_set("Asia/Kolkata");
$dt=date("d/m/Y h:i:s A");
 
 $to="pramod.growel@gmail.com";
 $subject="form submission";
 $message=".NAME:".$name."\n".$mobno."\n"."wrote the folowing:"."\n\n".$msg;
 $header="form:".$email;
 if(mail($to,$subject,$message,$header))
 {
	 echo "<h3>Sent successfully! Thank you"." ".$name.", We will contact you shortly!</h3>";
	 }
	 else{echo "something went wrong";}
}
?>
