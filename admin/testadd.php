<?php
session_start();
error_reporting(1);
if (!isset($_SESSION['alogin']))
{
	echo "<center><p class=\"style1\">Your are not logged in Please <a href=index.php>Login</a></p></center>";
  exit;
}
?>

<link href="../style-sheet.css" rel="stylesheet" type="text/css">
<?php
require("../database.php");
include("header2.php");
echo "<p class=\"header\">Add Test Name</p>";
if($_POST[submit]=='Save' || strlen($_POST['subid'])>0 )
{
  extract($_POST);
  mysql_query("insert into mst_test(sub_id,test_name,total_que) values ('$subid','$testname','$totque')",$cn) or die(mysql_error());
  echo "<p class=\"style1\">Test \"$testname\" Added Successfully.</p>";
  unset($_POST);
}
?>

<script language="JavaScript">
  function check() {
  mt=document.form1.testname.value;
  if (mt.length<1) {
    alert("Please Enter Test Name");
    document.form1.testname.focus();
    return false;
  }
  tt=document.form1.totque.value;
  if(tt.length<1) {
    alert("Please Enter Total Question");
    document.form1.totque.value;
    return false;
  }
  return true;
  }
</script>

<form name="form1" method="post" onSubmit="return check();">
  <table align="center">
    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Choose Subject</font></td>
      <td>
        <style type="text/css">
        .drop_view{
          width:238px;
          height:35px;
          font-family: Verdana;   
          font-size:13pt;
          color:#06535A;
          border:2px solid #0BC1D2;
        }
        </style>
        <select name="subid" class="drop_view">
          <?php
            $rs=mysql_query("Select * from mst_subject order by  sub_name",$cn);
	          while($row=mysql_fetch_array($rs))
            {
              if($row[0]==$subid)
                echo "<option value='$row[0]' selected>$row[1]</option>";
              else
                echo "<option value='$row[0]'>$row[1]</option>";
            }
          ?>
        </select>
      </td>
    </tr>
        
    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Test Name</font></td>
	    <td><input name="testname" type="text" id="testname" style="height:35px;width:238px;font-size:13pt;font-family:Verdana;color:#06535A;border:2px solid #0BC1D2;"></td>
    </tr>
    
    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Total Questions</font></td>
      <td><input name="totque" type="text" id="totque" style="height:35px;width:238px;font-size:13pt;font-family:Verdana;color:#06535A;border:2px solid #0BC1D2;"></td>
    </tr>
    
    <tr>
      <td><input type="submit" name="submit" value="Add" class="button1"></td>
      <td><input type="reset" name="reset" value="Clear" class="button2"></td>
    </tr>
  </table>
</form>
<?php
      include("footer.php");
    ?>