<html>
<head>

<style>


body {
margin-top:30;
margin-left: auto ;
margin-right: auto ;
text-align:center;
background-color:#1D4E6D;
}


table.dimensions { 
font-family:Arial;
width:95%;
border:1 solid #183C53;
} 


td#toptable { 
background-color:#11567E;
font-family:Arial;
color:#F4F4F4;
text-align:left;
} 


td#header { 
background-color:#17374C;
font-family:Arial;
color:#F4F4F4;
text-align:left;
}  

td#center {
width:95%;
}

td.catagory {
background-color:#477B9E;
font-family:Arial;
color:#F4F4F4;
text-align:center;
}


td.alt1 {
background-color:#123F59;
font-family:Arial;
color:#F4F4F4;
text-align:left;
}


td.alt2 {
background-color:#11567E;
font-family:Arial;
color:#F4F4F4;
text-align:left;
}


a {
text-decoration:none;
color:#EABC1B;
}


a:hover {
text-decoration:none;
font-weight: normal ;
color:#F4F4F4;
}


select {
	 color:#F4F4F4;
	 background-color:#11567E;
	 font-family:Arial;
	 border:1 solid #183C53;
}


input {
	 color:#F4F4F4;
	 background-color:#11567E;
	 font-family:Arial;
	 border:1 solid #183C53;
}


textarea {
	 color:#F4F4F4;
	 background-color:#11567E;
	 font-family:Arial;
	 border:1 solid #183C53;
}


</style>

	<title>VME Panel 1.1 Themes Installer</title>
</head>

<body>

	<table class="dimensions">
		   <tr>
		   	   <td class="catagory">
		   	   	   VME Panel Version 1.1 Upgrade
		   	   </td>
		   </tr>
		   <tr>
		   <tr>
		   	   <td class="alt2">
		   	   	  Please report all errors to <a href="mailto:switchskate@gmail.com">switchskate@gmail.com</a>
		   	   </td>
		   </tr>
		   <tr>
		   	   <td class="alt1"><br>
		
<?php

require ("config.php");

if ( 
($username != "") && ($password != "") && 
($hostname != "") && ($database != "") && 
($webmaster != "") && ($webmail != "") && 
($sitename != "") && ($siteurl != "") && 
($cmsurl != "") && ($defaulttheme != "")
) {

 
	 $Query = "INSERT INTO blocks VALUES ( '2','signin','3','2','1' )";
	 $Result = mysql_db_query ($database, $Query, $dblink);
	 if (!$Result) {die('Invalid query, please copy this and send it to switchskate@gmail.com: ' . mysql_error());} else { echo "Block 2 added <br \>"; }
	
	 $Query = "INSERT INTO schemes VALUES ( '7','Forever Grey','#777777','1','solid','#000000','center','0','#570416','#000000','Arial','95%','left','140','140','95%','#A2A2A2','left','#000000','#013E82','center','#FFFFFF','#C5C5C5','#000000','#636363','#D1D1D1','#C9C9C9','#90061F','center','100%','header.gif','basicthemes' )";
	 $Result = mysql_db_query ($database, $Query, $dblink);
	 if (!$Result) {die('Invalid query, please copy this and send it to switchskate@gmail.com: ' . mysql_error());} else { echo "Theme 6 Added <br \>"; }
	 
	 $Query = "INSERT INTO schemes VALUES ( '8','Forever Pink','#f4c6e9','1','solid','#bd11ff','center','0','#9202ca','#bd11ff','Tahoma','95%','left','140','140','95%','#f581d8','left','#000000','#ca02a2','center','#FFFFFF','#ff05cd','#FFFFFF','#ca02a2','#FFFFFF','#FFFFFF','#bd11ff','center','100%','header.gif','basicthemes' )";
	 $Result = mysql_db_query ($database, $Query, $dblink);
	 if (!$Result) {die('Invalid query, please copy this and send it to switchskate@gmail.com: ' . mysql_error());} else { echo "Theme 6 Added <br \>"; }
	 
mysql_close ($dblink);


echo "<center><br><br><b><h5>DONE Please delete this file</h5></b></center>";
	 
} else {
     print "Please fill out all of the fields in the config.php file.  You use notepad to open the file and save it.";
} 
?>



		   	   </td>
		   </tr>
	</table>

</body>
</html>
