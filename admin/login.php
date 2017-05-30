<?php
session_start();
error_reporting(1);
?>


<html>
	<head>
		<title>Administrative Area</title>
		<link href="../style-sheet.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<?php
			include("header2.php");
			extract($_POST);
			if(isset($submit))
			{
				include("../database.php");
				$rs=mysql_query("select * from mst_admin where loginid='$loginid' and pass='$pass'",$cn) or die(mysql_error());
				if(mysql_num_rows($rs)<1)
				{
					echo "<center><p><font color=#F02C29 face=Verdana size=4>Invalid Login ID or Password</font></p></center>";
					echo "<center><p><font color=#F02C29 face=Verdana size=4><a href=\"index.php\">Login Again</a></font></p></center>";
				    include("footer.php");
					exit;
				}
				$_SESSION['alogin']="true";
			}
			else if(!isset($_SESSION[alogin]))
			{
				echo "<center><p class=\"style1\">Your are not logged in Please <a href=index.php>Login</a></p></center>";
				exit;
			}
		?>
		<p class="header">Welcome to Admistrative Area </p>
		<table align="center">
			<tr>
				<td><a href="subadd.php"><img src="../image/sub.png" height="180" width="200"></a></td>
				<td><p class="style1"><a href="subadd.php">Add Subject</a></p></td>
				<td><a href="subadd.php"><img src="../image/test.png" height="180" width="200"></a></td>
				<td><p class="style1"><a href="testadd.php">Add Test</a></p></td>
				<td><a href="subadd.php"><img src="../image/question.png" height="180" width="200"></a></td>
				<td><p class="style1"><a href="questionadd.php">Add Question</a></p></td>
			</tr>
		</table>
<!--
		
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<div style="margin-left:20%;padding-top:5%">
<p class="style7"><a href="subadd.php">Add Subject</a></p>
<p class="style7"><a href="testadd.php">Add Test</a></p>
<p class="style7"><a href="questionadd.php">Add Question </a></p>
<p align="center" class="head1">&nbsp;</p>
</div>
</div>
-->
	<?php
      include("footer.php");
    ?>
	</body>
</html>
