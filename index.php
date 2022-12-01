<!DOCTYPE html>
<html>
<head>    
	<style>
  body{
    background-image: url(8.jp);

  }
i 
{
  font-size: 16px;
}
	ul {
        list-style-type: none;  
         }
         li 
         {
          float: left;
         }
        li a
         {

          display: block;
          color: white;
          text-align: center;
          padding: 10px 26px;
         text-decoration: none;
         font-size: 20px;
         font-family: centure; 
         }
         li a:hover 

         {
            background-color: #ddd;
          color: red;
          font-size: 18PX;
      }
  .lable{
    color: white ;
    font-size: ;
    font-family:Centaur;
        }
        .navbar {

  background-color: #333;
  overflow: hidden;
  width: 100%;
}
	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>	
	</title>
</head>
<body>
		<div class="container-fluid">

      <div class="row">
        <div class="col-md-1">
          <?php 
          session_start();
          echo "<h3 style= font-family:centure>" .$_SESSION['user']."</h3>"
           ?>
          
        </div>
        <div class="col-md-10">

				<center><h1 style="text-align:center; font-family: centure;"><strong>Reserve Bank of india </strong></h1><center>     <?php
                        echo date("Y-m-d");
                         ?>
                        
                         &copy;All copy Rigths Are Reserved by Akhil golu gusain 2018-<?php echo date("Y");?>
                 <img src="2.png" height="50px; ">
                

                            
                  </div>
                  <div class="col-md-1">
                     <?php

 if(isset($_SESSION['loguser']))
   echo "<h3 style= font-family:Centaur>Welcome  ".$_SESSION['loguser']."&nbsp;&nbsp; <br><a class='btn btn-danger' href='logout.php'>Logout<i class='fas fa-power-off'></i></a></h3>";
 else
  header('location:login.php')
 ?>
                    
                  </div>
      </div>            
                 
			<div class="row" style="background-color: black;">
					<ul>
                      <li><a class="active" href="home.php">
                        <i class="fa fa-home"></i> </a></li>
                      <li><a  href="Create.php">Create account
                      <i class="fas fa-user-circle"></i></a></li>
                      <li>
                         <a href="detail.php">Details
                          <i class="fas fa-info-circle"></i>
                         </a>
                       </li>
                       <li><a href="de.php">Deposit
                        <i class="fa fa-credit-card"></i>
                       </a></li>
                       <li><a href="wi.php">withdraw
                        <i class="fa fa-rupee"></i></a></li>
                       <li><a href="fu.php">Fund Transfer
                      <i class="fas fa-exchange-alt"></i>
                       </a></li>
                       <li><a href="su.php">Summary
                        <i class="fas fa-history"></i></a>

                       </li>
                       <li><a href="co.php">Change PIN
                       <i class="fas fa-key"></i></a></li>
                       <li><a href="ab.php">About
                       <i class="fas fa-address-card"></i></a></li>
                       <!--<i class="fas fa-piggy-bank" style="font-size: 30px;  color: white; margin-left:60px; margin-top: 5px;"></i> -->

                    </ul>	
				</div>	
			
    </div>
    <hr>
  </body>
  </html>
