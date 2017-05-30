<?php
session_start();
?>

<html>
  <head>
    <title>Online Examination</title>
    <link href="style-sheet.css" rel="stylesheet" type="text/css">
  </head>

  <body>
    <?php
      include("header.php");
      include("database.php");
      extract($_POST);
      if(isset($submit))
      {
	       $rs=mysql_query("select * from mst_user where login='$loginid' and pass='$pass'");
         $arr=mysql_fetch_array($rs);
	       if(mysql_num_rows($rs)<1)
		        $found="N";
	       else
	       {
		        $_SESSION[login]=$loginid;
            $name = $arr['username'];
            $email = $arr['email'];
	       }      
      }
      
      if (isset($_SESSION[login]))
      {
        echo "<font face=Verdana>Welcome, $name</font>";

		    echo '<table align="center">
                <tr>
                  <td><a href="sublist.php"><img src="image/subject.jpeg" height="150" width="150"></a></td>
                  <td><a href="sublist.php"><font face=Verdana>Subject Selection</font></a></td>

                  <td><a href="result.php"><img src="image/result.gif" height="150" width="150"></a></td>
                  <td><a href="result.php"><font face=Verdana>View Result</font></a></td>
                </tr>
              </table>
              ';
		    exit;
      }
    ?>

     <table width="100%">
      <tr>
        <td width="70%" height="25">&nbsp;</td>
        <td width="1%" rowspan="2" bgcolor="#0B4C56"><span class="style6"></span></td>
        <td width="29%" bgcolor="#0B4C56" align="center"><font face="Verdana" color="#FFFFFF">User Login</font></td>
      </tr>
      <tr>
        <td height="296" valign="top">
        <font face="Verdana">
          <div align="center">
            <h1 style="color:#15504E;">Welcome to Online Examination Portal</h1>
              <span class="style5">
                <!--<img src="image/paathshala.jpg" width="129" height="100">-->
                <span class="style7"><img src="images/logo2.png" width="300" height="150"></span>        </span>
        <param name="movie" value="english theams two brothers.dat">
        <param name="quality" value="high">
        <param name="movie" value="Drag to a file to choose it.">
        <param name="quality" value="high">
        <param name="BGCOLOR" value="#FFFFFF">
<p align="left" class="style5">&nbsp;</p>
      <blockquote>
          <p align="left" class="style5"><span class="style7">Welcome to Online 
            Examination Portal. This Site will provide the test <strong>(Multiple Choice Questions)</strong> for various core subject of interest. 
            You need to login for appear the online examination.</span></p>
      </blockquote>
    </div></td>
    </font>
    <td valign="top"><form name="form1" method="post" action="">
      <table width="200" border="0">
        <tr>
          <td><font face="Verdana" color="#0B4C56">Login ID </font></td>
          <td><input name="loginid" type="text" id="loginid2" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;"></td>
        </tr>
        <tr>
          <td><font face="Verdana" color="#0B4C56">Password</font></td>
          <td><input name="pass" type="password" id="pass2" style="height:35px;width:238px;font-size:13pt;font-face:Verdana;color:#06535A;border:2px solid #0BC1D2;"></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><span class="errors">
            <?php
		  if(isset($found))
		  {
		  	echo "<font face=\"Verdana\" color=\"#EA2323\">Invalid Username or Password</font>";
		  }
		  ?>
          </span></td>
          </tr>
        <tr>
          <td colspan=2 align="center" class="errors">
		        <input name="submit" type="submit" id="submit" value="Login" class="button1">
          </td>
        </tr>
        <tr>
          <td colspan="2" bgcolor="#0B4C56">
            <div align="center"><font face="Verdana" color="#FFFFFF">New User? <a href="signup.php" style="color: #33C6C2">Register Here</a></font></div>
          </td>
        </tr>
        <tr>
        <td colspan="2" bgcolor="#8585e0">
            <div align="center"><font face="Verdana" color="#FFFFFF">Forget Password? <a href="forget.php" style="color: #000099">Forget pass</a></font></div>
          </td>
        </tr>
      </table>
      <div align="center">
        <img src="images/sideleft.jpg" width="180" height="160">

      </div>
        <!--<p class="style5"><img src="images/sideleft.jpg" width="134" height="128">          </p>-->
        </div>
    </form></td>
  </tr>
  </table>
  <?php
    include("footer.php");
  ?>
</body>
</html>
