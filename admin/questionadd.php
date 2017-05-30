<?php
  session_start();
  require("../database.php");
  include("header2.php");
  error_reporting(1);
?>

<link href="../style-sheet.css" rel="stylesheet" type="text/css">
<?php
  extract($_POST);
  if (!isset($_SESSION[alogin]))
  {
	 echo "<center><p class=\"style1\">Your are not logged in Please <a href=index.php>Login</a></p></center>";
    exit;
  }
  echo "<p class=\"header\">Add New Question</p>";
  if($_POST[submit]=='Save' || strlen($_POST['testid'])>0 )
  {
    extract($_POST);
    mysql_query("insert into mst_question(test_id,que_desc,ans1,ans2,ans3,ans4,true_ans) values ('$testid','$addque','$ans1','$ans2','$ans3','$ans4','$anstrue')",$cn) or die(mysql_error());
    echo "<p class=\"style1\">Question Added Successfully.</p>";
    unset($_POST);
  }
?>

<script language="JavaScript">

function check() {
  mt=document.form1.addque.value;
  if (mt.length<1) {
    alert("Please Enter Question");
    document.form1.addque.focus();
    return false;
  }
  a1=document.form1.ans1.value;
  if(a1.length<1) {
    alert("Please Enter Answer1");
    document.form1.ans1.focus();
    return false;
  }
  a2=document.form1.ans2.value;
  if(a1.length<1) {
    alert("Please Enter Answer2");
    document.form1.ans2.focus();
    return false;
  }
  a3=document.form1.ans3.value;
  if(a3.length<1) {
    alert("Please Enter Answer3");
    document.form1.ans3.focus();
    return false;
  }
  a4=document.form1.ans4.value;
  if(a4.length<1) {
    alert("Please Enter Answer4");
    document.form1.ans4.focus();
    return false;
  }
  at=document.form1.anstrue.value;
  if(at.length<1) {
    alert("Please Enter True Answer");
    document.form1.anstrue.focus();
    return false;
  }
  return true;
}
</script>


<form name="form1" method="post" onSubmit="return check();">
  <table align="center">
    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Select Test Name</td>
      <td>
        <select name="testid" id="testid" class="drop_view">
        <?php
        $rs=mysql_query("Select * from mst_test order by test_name",$cn);
        	  while($row=mysql_fetch_array($rs))
            {
              if($row[0]==$testid)
                echo "<option value='$row[0]' selected>$row[2]</option>";
              else
                echo "<option value='$row[0]'>$row[2]</option>";
            }
        ?>
        </select>
      </td>
    </tr>

    <tr>
        <td><font color=#228B22 face="Verdana" size=4>Enter Question</font></td>
	      <td><textarea name="addque" cols="100" rows="5" id="addque" style="height:45px;width:935px;font-size:12pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Question"></textarea></td>
    </tr>
    
    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Option 1</td>
      <td><input name="ans1" type="text" id="ans1" size="100" maxlength="100" style="height:45px;width:935px;font-size:12pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Option One"></td>
    </tr>

    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Option 2</td>
      <td><input name="ans2" type="text" id="ans2" size="100" maxlength="100" style="height:45px;width:935px;font-size:12pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Option Two"></td>
    </tr>

    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Option 3</td>
      <td><input name="ans3" type="text" id="ans3" size="100" maxlength="100" style="height:45px;width:935px;font-size:12pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Option Three"></td>
    </tr>

    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Option 4</td>
      <td><input name="ans4" type="text" id="ans4" size="100" maxlength="100" style="height:45px;width:935px;font-size:12pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Option Four"></td>
    </tr>

    <tr>
      <td><font color=#228B22 face="Verdana" size=4>Answer</td>
      <td><input name="anstrue" type="text" id="anstrue" size="100" maxlength="100" style="height:45px;width:935px;font-size:12pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Correct Option"></td>
    </tr>

    <tr>
      <td align="center"><input type="submit" name="submit" value="Add" class="button1"></td>
      <td align="center"><input type="reset" name="reset" value="Clear" class="button2"></td>
    </tr>

  </table>
</form>