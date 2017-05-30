<?php
  session_start();
  require("../database.php");
  include("header2.php");
  error_reporting(1);
?>

<link href="../style-sheet.css" rel="stylesheet" type="text/css">
<?php
  extract($_POST);
  echo "<BR>";
  if (!isset($_SESSION['alogin']))
  {
	 echo "<center><p class=\"style1\">Your are not logged in Please <a href=index.php>Login</a></p></center>";
	 exit();
  }
  echo "<p class = \"header\">Add Subject Here</p>";
  echo "<table width=80%>";
  echo "<tr><td align=center></table>";
  if($submit=='submit' || strlen($subname)>0 )
  {
    $rs=mysql_query("select * from mst_subject where sub_name='$subname'");
    if (mysql_num_rows($rs)>0)
    {
	     echo "<p class=\"style1\">Subject is already exists</p>";
	     exit;
    }
    mysql_query("insert into mst_subject(sub_name) values ('$subname')",$cn) or die(mysql_error());
    echo "<p class=\"style1\">Subject added Successfully.</p>";
    $submit="";
  }
?>

<script language="JavaScript">
  function check() {
    mt=document.form1.subname.value;
    if (mt.length<1) {
      alert("Please Enter Subject Name");
      document.form1.subname.focus();
      return false;
    }
    return true;
  }
</script>

<head>
  <title>Administrative Area </title>
</head>
<form name="form1" method="post" onSubmit="return check();">
  <table align="center">
    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Subject Name</font></td>
      <td><input name="subname" placeholder="Enter Topic" type="text" id="subname" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;"></td>
    </tr>
    <tr>
       <td colspan="2" align="center"><input type="submit" name="submit" value="Add Subject" class="button1"></td>
    </tr>
  </table>
</form>
<?php
      include("footer.php");
    ?>
<!--
<div style="margin:auto;width:90%;height:500px;box-shadow:2px 1px 2px 2px #CCCCCC;text-align:left">
<title>Add Subject</title>
<form name="form1" method="post" onSubmit="return check();">
  <table width="41%"  border="0" align="center">
    <tr>
      <td width="45%" height="32"><div align="center"><strong>Enter Subject Name </strong></div></td>
      <td width="2%" height="5">  
      <td width="53%" height="32">
        <input name="subname" placeholder="enter language name" type="text" id="subname">
    <tr>
        <td height="26"> </td>
        <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="26"></td>
      <td>&nbsp;</td>
      <td><input type="submit" name="submit" value="Add" ></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
</div>
-->