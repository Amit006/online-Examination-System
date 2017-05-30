<?php
session_start()
?>

<html>
  <head>
    <title>Administrative Area</title>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> -->
    <link href="../style-sheet.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <?php
      include("header2.php");
    ?>

    <p class="header">Administrative Login</p>
   <!--   
    <form name="form1" method="post" action="login.php">
      <table width="490" border="0">
        <tr>
          <td width="106"><span class="style2"></span></td>
          <td width="132"><span class="style2"><span class="head1"><img src="login.jpg" width="131" height="155"></span></span></td>
          <td width="238">
            <table width="219" border="0" align="center">
              <tr>
                <td width="163" class="style2">Login ID </td>
                <td width="149"><input name="loginid" type="text" id="loginid"></td>
              </tr>
              <tr>
                <td class="style2">Password</td>
                <td><input name="pass" type="password" id="pass"></td>
              </tr>
              <tr>
                <td class="style2">&nbsp;</td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td class="style2">&nbsp;</td>
                <td><input name="submit" type="submit" id="submit" value="Login"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </form>
  -->
    <form name="form1" method="POST" action="login.php">
      <table align="center">
        <tr>
          <td><font color=#228B22 face="Verdana" size=4>Login ID</font></td>
          <td><font color="BLUE"><input name="loginid" type="text" id="loginid" size="20" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;"></td>
        </tr>
        <tr>
          <td><font color=#228B22 face="Verdana" size=4>Password</font></td>
          <td><input name="pass" type="password" id="pass" size="20" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;"></td>
        </tr>
        <tr align="center">
          <td><input name="submit" type="submit" id="submit" value="Login" class="button1"></td>
          <td><input name="reset" type="reset" id="reset" value="Reset" class="button2"></td>  
        </tr>
      </table>
    </form>
    <?php
      include("footer.php");
    ?>
  </body>
</html>
