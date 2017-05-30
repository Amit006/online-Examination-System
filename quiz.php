<?php
session_start();
error_reporting(1);
include("database.php");
extract($_POST);
extract($_GET);
extract($_SESSION);

if(isset($subid) && isset($testid))
{
$_SESSION[sid]=$subid;
$_SESSION[tid]=$testid;
header("location:quiz.php");
}
if(!isset($_SESSION[sid]) || !isset($_SESSION[tid]))
{
	header("location: index.php");
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Online Quiz</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style-sheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");


$query="select * from mst_question";

$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if(!isset($_SESSION[qn]))
{
	$_SESSION[qn]=0;
	mysql_query("delete from mst_useranswer where sess_id='" . session_id() ."'") or die(mysql_error());
	$_SESSION[trueans]=0;
	
}
else
{	
		if($submit=='Next Question' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				$_SESSION[qn]=$_SESSION[qn]+1;
		}
		else if($submit=='Get Result' && isset($ans))
		{
				mysql_data_seek($rs,$_SESSION[qn]);
				$row= mysql_fetch_row($rs);	
				mysql_query("insert into mst_useranswer(sess_id, test_id, que_des, ans1,ans2,ans3,ans4,true_ans,your_ans) values ('".session_id()."', $tid,'$row[2]','$row[3]','$row[4]','$row[5]', '$row[6]','$row[7]','$ans')") or die(mysql_error());
				if($ans==$row[7])
				{
							$_SESSION[trueans]=$_SESSION[trueans]+1;
				}
				echo "<font face=Verdana><h1 style=\"color:#15504E;\" align=center>Result</h1></font>";
				$_SESSION[qn]=$_SESSION[qn]+1;
				echo "<table align=center><tr><td><font face=Verdana>Total Questions : <td> $_SESSION[qn]";
				echo "<tr><td><font face=Verdana>True Answers : <td>".$_SESSION[trueans];
				$w=$_SESSION[qn]-$_SESSION[trueans];
				echo "<tr><td><font face=Verdana>Wrong Answers : <td> ". $w;
				echo "</table>";
				mysql_query("insert into mst_result(login,test_id,test_date,score) values('$login',$tid,'".date("d/m/Y")."',$_SESSION[trueans])") or die(mysql_error());
				echo "<h1 style=\"color:#15504E;\" align=center><a href=review.php><font face=Verdana>Review Question</font></a></h1>";
				unset($_SESSION[qn]);
				unset($_SESSION[sid]);
				unset($_SESSION[tid]);
				unset($_SESSION[trueans]);
				exit;
		}
}
$rs=mysql_query("select * from mst_question where test_id=$tid",$cn) or die(mysql_error());
if($_SESSION[qn]>mysql_num_rows($rs)-1)
{
unset($_SESSION[qn]);
echo "<h1 class=head1>Some Error  Occured</h1>";
session_destroy();
echo "Please <a href=index.php> Start Again</a>";

exit;
}
mysql_data_seek($rs,$_SESSION[qn]);
$row= mysql_fetch_row($rs);
echo "<form name=myfm method=post action=quiz.php>";
echo "<table width=100%> <tr> <td width=30>&nbsp;<td> <table border=0>";
$n=$_SESSION[qn]+1;
echo "<tr><td><font face=\"Verdana\" color=\"#0B4C56\">Que ".  $n .": $row[2]</font>";
echo "<tr><td><font face=\"Verdana\" color=\"#0B4C56\"><input type=radio name=ans value=1>$row[3]</font>";
echo "<tr><td><font face=\"Verdana\" color=\"#0B4C56\"><input type=radio name=ans value=2>$row[4]</font>";
echo "<tr><td><font face=\"Verdana\" color=\"#0B4C56\"><input type=radio name=ans value=3>$row[5]</font>";
echo "<tr><td><font face=\"Verdana\" color=\"#0B4C56\"><input type=radio name=ans value=4>$row[6]</font>";

if($_SESSION[qn]<mysql_num_rows($rs)-1)
echo "<tr><td><input type=submit name=submit value='Next Question' class=button1></form>";
else
echo "<tr><td><input type=submit name=submit value='Get Result' class=\"button1\"></form>";
echo "</table></table>";
include("footer.php");
?>
</body>
</html>