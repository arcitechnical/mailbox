<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
<link rel="stylesheet" href="./css/style.css">
    <title>registration</title>
  </head>
  <body data-spy="scroll" data-target=".navbar">

    
    <div  id="topheader">
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container text-uppercase p-2">
        <a class="navbar-brand font-weight-bold text-white" href="#"> <img src="./images/mailbox.jpg" style="height: 50px; width:100px;"></a>
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
                      <a href="index.php">Sign in</a>
                </div>
                </div>
                
               </section>

    </div>
    <section id="Contact" class="contact" style="margin-top: 100px; position: relative;">
      <div class="container  text-center" >
<h1 class="text-center font-weight-bold "style=" color: white; text-shadow:4px 4px 4px orange;"><strong>Register Here</strong></h1>
        <p class="text-capatilize pt-1 text-white"><strong>Enter Your Details</strong></p>
              </div> 
              
              <div class="container">
                <div class="row">
                  <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">
                    <form action="" method="POST" >
                      <form class="form-control">
                      
                        <div class="form-group">
                       
                        <input type="text" class="form-control" id="username"  placeholder="Enter your First name" name="fname">

                      </div>
                      
                      <div class="form-group">
                        <input type="text" class="form-control" id="email" placeholder="Enter your Last name" name="lname">
                      </div>

                      <div class="form-group">
                       
                        <input type="text" class="form-control" id="username"  placeholder="Enter your username" name="user">

                      </div>

                      
                      <div class="form-group">
                       
                        <input type="password" class="form-control" id="username"  placeholder="Password" name="password">

                      </div>

                      
                      <div class="form-group">
                       
                        <input type="password" class="form-control" id="username"  placeholder="Confirm password" name="cpassword">

                      </div>
                      
                      <div class="form-group">
                        <input type="text" class="form-control" id="number" placeholder="Enter your Gender" name="gender" >
                      </div>
                      
                      

                      <div class="form-group">
                        <input type="text" class="form-control" id="number" placeholder="Enter your mobile number" name="number" >
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" id="number" placeholder="Enter your Country" name="country" >
                      </div>
                      
                      
                      
                      <div class="d-flex justify-content-center form-button" >
                      <input type="Submit" class="btn btn" name="submit" value="Create Account" >
                      </div>
                      </form>
                    </form>

                  </div>

                </div>

              </div>
              </section>

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
	
	
<?php

 error_reporting(0);

 $fname = $_POST['fname'];
$lname = $_POST['lname'];
$user = $_POST['user'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$gender= $_POST['gender'];
$number = $_POST['number'];
$country = $_POST['country'];




//Connection
$con = mysqli_connect("localhost","root","");


//create database
$c="create database mailbox";
$res = mysqli_query($con,$c);

//selection
$res = mysqli_select_db($con,"mailbox");


//create table
$t="create table register(id int not null auto_increment, fname varchar(200), lname varchar(200),user varchar(200),password varchar(250), cpassword varchar(250), gender varchar(40),number bigint, country varchar(200),primary key(id))";
$res = mysqli_query($con,$t);



//insert record

if($_POST['submit'])
{
 if(empty($fname) || empty($lname) || empty($user) || empty($password) || empty($cpassword) || empty($gender) || empty($number) || empty($country ) )
 {
 
 echo"<script> alert('*All Feilds are mandatory');</script>";
 }
 else
 {
  
 $ins= "insert into register(fname,lname,user,password,cpassword,gender,number,country)values ('$fname','$lname','$user','$password','$cpassword','$gender','$number','$country')";
 $res = mysqli_query($con,$ins);
 echo"<script> alert('One new user registered');</script>";
 
 }
 }


?>