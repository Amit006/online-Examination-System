<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>New user signup </title>
<script language="javascript">
function check()
{

 if(document.form1.lid.value=="")
  {
    alert("Plese Enter User Name ");
	document.form1.lid.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }
  if(document.form1.address.value=="")
  {
    alert("Plese Enter Address");
	document.form1.address.focus();
	return false;
  }
  if(document.form1.city.value=="")
  {
    alert("Plese Enter City Name");
	document.form1.city.focus();
	return false;
  }
  if(document.form1.phone.value=="")
  {
    alert("Plese Enter Contact No");
	document.form1.phone.focus();
	return false;
  }
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	  document.form1.email.focus();
	  return false;
  }

  var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.form1.email.value.search(email)==-1)
    {
      alert("Enter Valid Email ID.");
      document.form1.email.focus();
      return false;
   }
   /*
  e=document.form1.email.value;
		f1=e.indexOf('@');
		f2=e.indexOf('@',f1+1);
		e1=e.indexOf('.');
		e2=e.indexOf('.',e1+1);
		n=e.length;

		if(!(f1>0 && f2==-1 && e1>0 && e2==-1 && f1!=e1+1 && e1!=f1+1 && f1!=n-1 && e1!=n-1))
		{
			alert("Please Enter valid Email");
			document.form1.email.focus();
			return false;
		}
  return true;
  */
  }
  
</script>
<link href="style-sheet.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
include("header.php");
?>
 <table width="100%" border="0">
   <tr>
     <!--<td width="132" rowspan="2" valign="top"><span class="style8"><img src="images/connected_multiple_big.jpg" width="131" height="155"></span></td>-->
     <td width="468" height="57" align="center"><h1 style="color:#15504E; font-family:Verdana;">New User Register</h1></td>
   </tr>
    <tr>
      <td>
        <form name="form1" method="post" action="signupuser.php" onSubmit="return check();">
          <table width="400" border="0" align="center">
          <font face="Verdana">
            <tr>
              <td><font face="Verdana">User Name</font></td>
              <td><input type="text" name="lid" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Desired Username"></td>
            </tr>
            <tr>
              <td><font face="Verdana">Password</td>
              <td><input type="password" name="pass" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Choose Password"></td>
            </tr>
            <tr>
              <td><font face="Verdana">Retype Password </td>
              <td><input name="cpass" type="password" id="cpass" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Retype Password"></td>
            </tr>
            <tr>
              <td><font face="Verdana">Full Name</td>
              <td><input name="name" type="text" id="name" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Desired Full Name"></td>
            </tr>
            <tr>
              <td><font face="Verdana">Address</td>
              <td><textarea name="address" id="address" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Address Details"></textarea></td>
            </tr>
            <tr>
              <td><font face="Verdana">City</td>
              <td><input name="city" type="text" id="city" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="City Name"></td>
            </tr>
            <tr>
              <td><font face="Verdana">Mobile</td>
              <td><input name="phone" type="text" id="phone" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Mobile Number"></td>
            </tr>
            <tr>
              <td><font face="Verdana">Email ID</td>
              <td><input name="email" type="text" id="email" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;" placeholder="Valid Email Id"></td>
            </tr>
            <tr>
              <td colspan="2" align="center"><input type="submit" name="Submit" value="Register" class="button1"></td>
            </tr>
          </font>
          </table>
        </form>
      </td>
    </tr>
  </table>
  <?php
    include("footer.php");
  ?>
  </body>
</html>
