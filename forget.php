<!doctype html>
<html>
<head>
<title>online Examination</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
<head>
<body>
<div clas='conatiner'>
    <div class="row" style="background:#62A2D1">
            <table class="table" width="100%">
                    <tr>
                        <td rowspan=2><img src="image/logo.jpg" height="150" width="150"></td>
                        <td><font face="Verdana" size="8">Online Examination System</font></td>
                    </tr>
                    <tr>
                        <td><font face="Verdana" size="3"><marquee>Online Examination in Technical Core Subject for BCA, MCA, B.Tech(CS/IT), M.Tech(CS/IT)</marquee></font></td>
                    </tr>
            </table>
    </div>


    <div class=row>
        <div class="offset-lg -4 col-lg-4 offset-lg-4">
             <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                              <form class="form" method="post">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="fa fa-envelope color-blue"></i></span>
                                      
                                      <input id="emailInput" placeholder="email address"  class="form-control" type="email" name="F_email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" name="fb_submit" value="Send My Password" type="submit">
                                  </div>
                                </fieldset>
                              </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
        </div>
     </div>
<!-- form subbmit code -->
<?php
include("database.php");

if (isset($_POST["F_email"])){
    $Email =$_POST["F_email"];
    $submit = $_POST["Fb_submit"];
    echo "<h1>".$Email."</h1>";

    if ($Email){
        //check the email exit
        $email_check_result =mysql_query("select * from mst_user where email='".$Email." ' ");

        $row_val_array = mysql_fetch_row($email_check_result);
        echo "<h1>".$row_val_array[3]."</h1>";
        // // foreach($row_val as $values){
        // //         echo "<h1>  Email: Result:->".$values."</h1>";
        // // }
        // echo "<pre>";
        // print_r($row_val);
        // echo "</pre>";

        $count=mysql_num_rows($email_check_result);

        if($count != 0){
            //retrive the password

            $retrive_pass =mysql_query( "select pass from mst_user where email='".$Email."'");
            $password = mysql_fetch_row($retrive_pass);
            
            //send the email with the password
            require 'PHPMailer/PHPMailerAutoload.php';

                     $mail = new PHPMailer;

                        //$mail->SMTPDebug = 3;                               // Enable verbose debug output

                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = 'amitnkoffice@gmail.com';                 // SMTP username
                        $mail->Password = 'Amit@006';                           // SMTP password
                        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 465;                                    // TCP port to connect to

                        $mail->setFrom('no-replay@onlineexamsystem.com', 'form_Mailer');
                        $mail->addAddress($Email, $row_val_array[3]);     // Add a recipient

                        $mail->addReplyTo('info@example.com', 'Information');

                        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
                        $mail->addAttachment('images/sideleft.jpg', 'sucess.jpg');    // Optional name
                        $mail->isHTML(true);  // Set email format to HTML

                        

                        $mail->Subject = 'Your Online Examination Portal PAssword';
                        $mail->msgHTML(file_get_contents('contents.html'), dirname(__FILE__));
                        $mail->Body    = "<h1 style='background:blue; font-size:16px;'>
                                                <strong>your password is:-> ".$password[0 ]. " 
                                                </strong>
                                            </h1>";

                        $mail->AltBody = "well your Online portal Password Is:".$password[0 ]."LOG in with this ";

                        if(!$mail->send()) {
                            echo 'Message could not be sent.';
                            echo 'Mailer Error: ' . $mail->ErrorInfo;
                        } else {
                            echo 'Message has been sent';
                        }


        }
        else {
            echo "<div class='alert alert-danger' role='alert'><strong>Sorry!</strong> we dont have your Email In Our DATABASE. Try by<a clas='btn btn-outline-info' href='signup.php'>SignUp</a></div>";
        }

    }
}

?>

<!-- End -->
    <div class='row'>
                        <table class="table table-striped" bgcolor="#62A2D1" width="100%">
                    <tr>
                        <td>
                        <p class="lead band-well" style="text-align:center;">
                                    <strong>
                                    Project by:  Mijanur Rahaman | Amit Nayek<br/>
                                    Copyright &copy; - FROST@006
                                    </strong>
                        </p>
                        </td>
                    </tr>
                    </table>
    </div>'
 </div>   
<body>
</html>