<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<html>
<head>
	<title>Ventaja Designs</title>
	<style type="text/css">
	<!--
	body {background-color:transparent;}
	-->
	</style>
	<LINK REL=stylesheet HREF="style.css" TYPE="text/css">
</head>
<body text="#ffffff">
<font face="Berlin Sans FB Demi">
<a href="pricing.html">|Pricing|</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.html">|How we work|</a>
<center>
<h2>Web site design</h2>
<h3>Sign up</h3>
<?php
   if ($_SERVER['REQUEST_METHOD']=="POST"){

   $to="webmaster@ventajadesigns.net";
   $subject="Web site design submission";

   $from = stripslashes($_POST['fromname'])."<".stripslashes($_POST['fromemail']).">";

   $message = "Web site design submission:
	First Name = $first_name
	Last Name = $last_name
	E-mail = $email
	Country = $country
	Plan = $plan";

   $mime_boundary="==Multipart_Boundary_x".md5(mt_rand())."x";

   $tmp_name = $_FILES['filename']['tmp_name'];
   $type = $_FILES['filename']['type'];
   $name = $_FILES['filename']['name'];
   $size = $_FILES['filename']['size'];

   if (file_exists($tmp_name)){

      if(is_uploaded_file($tmp_name)){

         $file = fopen($tmp_name,'rb');

         $data = fread($file,filesize($tmp_name));

         fclose($file);

         $data = chunk_split(base64_encode($data));
     }

      $headers = "From: $from\r\n" .
         "MIME-Version: 1.0\r\n" .
         "Content-Type: multipart/mixed;\r\n" .
         " boundary=\"{$mime_boundary}\"";

      $message = "This is a multi-part message in MIME format.\n\n" .
         "--{$mime_boundary}\n" .
         "Content-Type: text/plain; charset=\"iso-8859-1\"\n" .
         "Content-Transfer-Encoding: 7bit\n\n" .
         $message . "\n\n";

      $message .= "--{$mime_boundary}\n" .
         "Content-Type: {$type};\n" .
         " name=\"{$name}\"\n" .
         //"Content-Disposition: attachment;\n" .
         //" filename=\"{$fileatt_name}\"\n" .
         "Content-Transfer-Encoding: base64\n\n" .
         $data . "\n\n" .
         "--{$mime_boundary}--\n";

      if (@mail($to, $subject, $message, $headers))
         echo "Submission Sent";
      else
         echo "Failed to send";
   }
} else {
?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" 
   enctype="multipart/form-data" name="form1">
   First Name:<br>
   <input type="text" name="first_name" size=33 style=" border-color:#ffffff;background-color:transparent;color:#ffffff;font-size:12pt; font-family:Arial;border-style:solid;"><br>
   <br>Last Name:<br>
   <input type="text" name="last_name" size=33 style=" border-color:#ffffff;background-color:transparent;color:#ffffff;font-size:12pt; font-family:Arial;border-style:solid;"><br>
   <br>E-mail:
   <br><input type="text" name="email" size=33 style=" border-color:#ffffff;background-color:transparent;color:#ffffff;font-size:12pt; font-family:Arial;border-style:solid;"><br>
   <br>Country:
   <br><input type="text" name="country" size=33 style=" border-color:#ffffff;background-color:transparent;color:#ffffff;font-size:12pt; font-family:Arial;border-style:solid;"><br>
   <br>Plan:
   <br><input name="plan" type="radio" value="Custom made site" style=" border-color:#ffffff;background-color:transparent;color:#ffffff;font-size:12pt; font-family:Arial;border-style:solid;" checked>Custom made site<br><br>
   <input name="plan" type="radio" value="Site reconstruction" style=" border-color:#ffffff;background-color:transparent;color:#ffffff;font-size:12pt; font-family:Arial;border-style:solid;" >Site reconstruction<br><br>
   <input name="plan" type="radio" value="Pre-made template w/designing" style=" border-color:#ffffff;background-color:transparent;color:#ffffff;font-size:12pt; font-family:Arial;border-style:solid;" >Pre-made template w/designing
   <br><br><input type="button" value="Submit" name="Submit" style=" border-color:#ffffff;background-color:transparent;color:#ffffff;font-size:12pt; font-family:Arial;border-style:solid;" > 
   
   </form>
<?php } ?>
</body>
</html>
			
