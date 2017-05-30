<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Quiz List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style-sheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
echo "<font face=\"Verdana\"><h1 style=\"color:#15504E;\" align=\"center\">Choose Subject for Online Examination</h1></font>";
$rs=mysql_query("select * from mst_subject");
echo "<table align = center>";
	while($row=mysql_fetch_row($rs))
	{
		echo "<tr><td align=left><img src=\"images/bullet.png\" height=20 width=20>&nbsp;&nbsp;<a href=showtest.php?subid=$row[0]><font size=4 face=Verdana style=\"color: #63CE38\">$row[1]</font></a>";
	}
echo "</table>";
include("footer.php")
?>
</body>
</html>
