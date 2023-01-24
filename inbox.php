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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style1.css">
    <title>Document</title>
	<style>
table {
 margin-left:40px;
  width: 80%;
}

th, td {
  text-align: left;
  padding: 5px;
}


</style>
</head>

<body>

    <div class="mainbody">

        <div class="row">
            <div class="logo">
                <img src="./images/email_PNG36.png">
            </div>
            <div class="logout">
            <a href="logout.php" ><input type="submit" value="LOGOUT"></a>
            </div>
        </div>

        <!-- main content -->
        <div class="row2">
          
                <div class="left">
                    <ul>
                        <li><a href="compose.php">COMPOSE</a></li>
                        <li><a href="#">INBOX</a></li>
                        <li><a href="send.php">SEND</a></li>
                        <li><a href="draft.php">DRAFT</a></li>
                    </ul>
<img src="./images/mail.png" style="width: 150px;">
                </div>


                <div class="right">


<?php
include("connect.php");

 $q="select * from register where user='$_SESSION[user]'";
  $res= mysqli_query($con,$q);
  $c= mysqli_num_rows($res);
  
   echo "<h4 id='user'>Welcome to $_SESSION[user] </h4>";
  
?>
 
<br>
               
                   <form action="" method="">
				     
                     <div style="overflow-x: hidden;">
  
  
  
                       <table border="2">
                      <tr>
                       <th>Form</th>
                       <th>Subject</th>
                       <th>Message</th>
                       <th>Date</th>
      
                        </tr>
						
						
	           
                         
						<?php
						$res= mysqli_query($con,"select * from inbox where reciever = '$_SESSION[user]'");
						while($row=mysqli_fetch_array($res))
						{
						?>
						<tr>
						<td><?php echo $row["sender"];?></td>
						<td><?php echo $row["subject"];?></td>
						<td><?php echo $row["message"];?></td>
						<td><?php echo $row["datetime"];?></td>
						<?php
						}
						?>
 

 
    
    
	
                      </tr>
	</table></div>
						
                    </form> 
            
                </div>
          
        </div>

    </div>
    


    <footer>
      <div class="row3">
<h1><span>  MailBox.com 2020</span></h1>
      </div>
    </footer>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>