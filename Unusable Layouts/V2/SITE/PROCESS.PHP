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

<SCRIPT LANGUAGE="php">
    $email = $HTTP_POST_VARS[email];
    $mailto = "webmaster@ventajadesigns.net";
    $mailsubj = "Comments or questions about ventaja designs";
    $mailhead = "From: $email\n";
    reset ($HTTP_POST_VARS);
    $mailbody = "Values submitted from web site form:\n";
    while (list ($key, $val) = each ($HTTP_POST_VARS)) {
        $mailbody .= "$key : $val\n"; }
    mail($mailto, $mailsubj, $mailbody, $mailhead);
</SCRIPT>

Thank you for sending in your comments or questions.
</body>
</html>
