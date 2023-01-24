<?php
error_reporting(0);
session_start();
if($_POST['signin'])
	{
include("connect.php");
 $_SESSION['user']=$_POST['u'];	
  $_SESSION['password']=$_POST['p'];
  
  $q="select * from register where user='$_POST[u]' and password='$_POST[p]'";
  $res= mysqli_query($con,$q);
  $c= mysqli_num_rows($res);
  if($c!=0)
  {
  header("location:account.php");	
  }
  
  }
?>



<!doctype html>

<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="./css/style.css">
    <title>Mailbox</title>
  </head>
  <body data-spy="scroll" data-target=".navbar">

    
    <div  id="topheader">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container text-uppercase p-2">
        <a class="navbar-brand font-weight-bold text-white" href="#"><img src="./images/mailbox.jpg" style="height: 50px; width:100px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto text-uppercase mx-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#Home">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About mailbox</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Info</a>
            </li>

            
          </ul>
        </div>
        </div>
        </nav>
        </div>
      
            
        <div class="header">
              <section class="header-content">
                <div class="center-div">
                  <h1 class="font-weight-bold text-uppercase" style="text-shadow:4px 4px 4px wheat " >Email by Mailbox</h1>
                     <p>New to Mailbox?</p>
                     <div class="header-buttons">
                      <a href="register.php">Create an Account</a>
                     <!-- <a href="#">Sign in</a>-->
                </div>
                </div>
                
               </section>

    </div>
    <div class="signin" >
    <div class="container col-md-4 col-lg-4" style="margin-top: 100px;" id="Signin">
      <div class="row" style="justify-content: center; align-items: center; ">
        
        <form action="" method="post">
          <h1 class="text-center text-primary" style="margin-top: 10px;"><strong>Sign IN</strong></h1>
      <br>
          <div class="form-group">
            <label  id="form" style="margin-left: 30px; font-size: 20px;"><strong>UserName:</strong></label>
            
            <input type="text" class="form-cntrol" placeholder="Enter Username" size="30"  name="u">
            <small id="emailHelp" class="form-text text-muted" style="margin-left: 30px;">We'll never share your email with anyone else.</small>
          </div>
      
      <br>
      <div class="form-group">
            <label for="Password" style="margin-left: 30px; font-size: 20px;"><strong> Password:</strong></label>
            <input type="Password" class="form-cntrol" placeholder="Enter Password"size="30"  name="p"><br><br>
			
			<?php
		if($_POST['signin'])
	{
include("connect.php");
 $_SESSION['user']=$_POST['u'];	
  $_SESSION['password']=$_POST['p'];
  
  $q="select * from register where user='$_POST[u]' and password='$_POST[p]'";
  $res= mysqli_query($con,$q);
  $c= mysqli_num_rows($res);
  if($c!=0)
  {
  header("location:account.php");	
  }
  else
  {
   echo "<h6 id='invalid'>Invalid Password and username</h6>";
  }
  }
  ?>
		  
          </div>
		  
		  
      
          
      
          
          <div class="checkbox mb-5" style="margin-left: 20px;">
          <label><input type="checkbox"> <strong>Remember me</strong></label>
		  <a href="register.php" style="margin-left: 70px;">Don't Have an Account?</a>
        </div>
	
      <br>
        <input type="submit" class="btn btn-info" style="margin-left: 150px; margin-bottom:70px;" value="Sigin" name="signin">
		 <input type="reset" class="btn btn-info" style=" margin-bottom:70px;" value="Clear">
		
      
  
      
          </form>
      
      </div>
      </div>
      </div>

      <footer class="footermain" style="margin-top: 70px; width: 100%;
      height: auto;
       padding: 70px 0 20px 0;
       background-color: #50d1c0 !important; position: relative;">
       <div class="mt-2 text-center text-white" style="color: brown !important">
        <p><strong> @2021 All rights reserved | This template is made by Mailbox</strong></p>
      </div>
       </footer>
 	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>       
    </body>
    </html>
	
	
	