<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz - Test List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="quiz.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php
include("header.php");
include("database.php");
extract($_GET);
$rs1=mysql_query("select * from mst_subject where sub_id=$subid");
$row1=mysql_fetch_array($rs1);
echo "<h1 align=center><font color=#1F7FD5 face=Verdana> $row1[1]</font></h1>";
$rs=mysql_query("select * from mst_test where sub_id=$subid");
if(mysql_num_rows($rs)<1)
{
	echo "<br><font face=\"Verdana\"><h1 style=\"color:#D52D0F;\" align=center>No Question Paper Available for This Subject</h1>";
	exit;
}
echo "<h1 align=center><font color=#17C19B face=Verdana>Select Question Paper from Following</h1>";
echo "<table align=center>";

while($row=mysql_fetch_row($rs))
{
	echo "<tr><td align=left><img src=\"images/bullet.png\" height=20 width=20>&nbsp;&nbsp;<a href=quiz.php?testid=$row[0]&subid=$subid><font size=4><font size=4 face=Verdana style=\"color: #63CE38\">$row[2]</font></a>";
}
echo "</table>";
?>
</body>
</html>
