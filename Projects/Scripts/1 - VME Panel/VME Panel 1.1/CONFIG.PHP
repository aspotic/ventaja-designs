<?php
/*
Made by Adam K (switchskate@gmail.com)
Setup File
Please do not redistribute this merchandise because you and the person you give the file(s) to will be prosecuted.

Please edit the following information as it is called for, if this isn't filled out properly your site will not work.
*/

$username = "";                            // The username for your database
$password = "";                            // The password for your database
$hostname = "localhost";                   // The hostname for your database (usually localhost)
$database = "";                            // The name of your database
 
$webmaster = "";                           // Your first name
$webmail = "";                             // Your email address

$sitename = "";                            // The name of your site   
$siteurl = "http://www.yourdomain.net/";   // The address to your site (with a / at the end)
$cmsurl = "http://www.yourdomain.net/";    // The address to the folder of th VME Panel (with a / at the end) (probably your site URL)
$defaulttheme = 1;                         // Set the default theme, automatically set to theme 1.

$setnewssize = 3;



/*

DO NOT EDIT PAST HERE

*/


$imgfolder = "images/";
$themefolder = "themes/";
$ipaddress =  $_SERVER['REMOTE_ADDR'];
$dblink = mysql_connect ($hostname, $username, $password);
$db2user = "switchsk_vmeuser";
$db2pass = "freepass";
$db2host = "localhost";
$database2 = "switchsk_vmepanel";
$dbtable2 = "vmecpstatus";
$dbtable3 = "vmeusers";

?>