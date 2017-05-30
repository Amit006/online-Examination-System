<style type="text/css">
	body {
		margin-left: 0px;
		margin-top: 0px;
	}
</style>

<table bgcolor="#62A2D1" width="100%">
	<tr>
		<td rowspan=2><img src="../image/logo.jpg" height="150" width="150"></td>
		<td><font face="Verdana" size="8">Online Examination System</font></td>
	</tr>
	<tr>
		<td><font face="Verdana" size="3"><marquee>Online Examination in Technical Core Subject for BCA, MCA, B.Tech(CS/IT), M.Tech(CS/IT)</marquee></font></td>
	</tr>
</table>

<table width="100%">
	<tr>
    	<td aling=left>
			<?php
			if(isset($_SESSION['alogin']))
	 			echo "<div align=\"left\"><font face=\"Verdana\" size=\"3\"><a href=\"login.php\">Home Page</a> | <a href=\"signout.php\">Logout</a></font></div>";
	 		else
	 			echo "&nbsp;";
			?>
		</td>
		<td aling=right>
			<?php
			if(isset($_SESSION['alogin']))
	 			echo "<div align=\"right\"><font face=\"Verdana\" size=\"3\">Welcome, Admin</font></div>";
	 		else
	 			echo "&nbsp;";
			?>
		</td>
  	</tr>
</table>
