<?php
error_reporting(0);
session_start();

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Document</title>
</head>

<body>

    <div class="mainbody">

        <div class="row">
            <div class="logo">
                <img src="./images/email_PNG36.png">
            </div>
            <div class="logout">
            <a href="logout.php"><input type="submit" value="LOGOUT"></a>
            </div>
        </div>

        <!-- main content -->
        <div class="row2">
          
                <div class="left">
                    <ul>
                        <li><a href="#">COMPOSE</a></li>
                        <li><a href="inbox.php">INBOX</a></li>
                        <li><a href="send.php">SEND</a></li>
                        <li><a href="draft.php">DRAFT</a></li>
                    </ul>
<img src="./images/mail.png" style="width: 150px;">
                </div>


                <div class="right">


<?php

include("connect.php");
 $q="select * from register where user='$_SESSION[user]' and password='$_SESSION[password]'";
  $res= mysqli_query($con,$q);
  $c= mysqli_num_rows($res);
  
  
 echo "<h4 id='user'>Welcome $_SESSION[user] </h4>";
 

 ?>
<br>

                    <form action="" method="post">
					 <label>To  :</label>
					 
                        <select name="reciver">
						<option value="">Select a Reciever</option>
						<?php
						$res= mysqli_query($con,"select * from register");
						while($row=mysqli_fetch_array($res))
						{
						?>
						<option><?php echo $row["user"];?></option>
						<?php
						}
						?>
						</select>
                        <br>
                        <label>Subject :</label>
                        <input type="text" name="subject">
                        <br><br>
                        <label for="">Message</label>
                        <textarea rows="20" cols="50" name="message"></textarea>

                        <br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" value="SEND" id="submit" name="send">
                        <input type="submit" value="SEND TO DRAFT"  id="draft" name="draft" >
                        
                    </form> 
                   
                </div>
          
        </div>

    </div>


    <footer>
      <div class="row3">
<h1><span>   MailBox.com 2020</span></h1>
      </div>
    </footer>
</body>

</html>
<?php

if($_POST['send'])
{
include("connect.php");

$sender = $_SESSION['user'];
$reciever = $_POST['reciver'];
$subject = $_POST['subject'];
$message = $_POST['message'];


 $ins= "insert into inbox(sender,reciever,subject,message)values ('$sender','$reciever','$subject','$message')";
 $res = mysqli_query($con,$ins);
 echo"<script> alert('Mail has been sent successfully!');</script>";
 
 }

?>

<?php

if($_POST['draft'])
{
include("connect.php");

$sender = $_SESSION['user'];
$reciever = $_POST['reciver'];
$subject = $_POST['subject'];
$message = $_POST['message'];


 $ins= "insert into draft(sender,reciever,subject,message)values ('$sender','$reciever','$subject','$message')";
 $res = mysqli_query($con,$ins);
 echo"<script> alert('Mail has been sent to draft!');</script>";
 
 }

?>
