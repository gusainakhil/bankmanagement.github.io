<!DOCTYPE html>
<html>
<head> 
  <style>
  </style>
 <script>
function valid()
{
var a=document.getElementById("an").value;
var b=document.getElementById("p").value;


if(a=="")
{
alert("Account number is  Mandoty");
return false;
}
if(b=="")
{
alert("Enter pin");
return false;
}
}
</script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
  
    <div class="container-fluid">
      <div class="row">
        <center><h1 style="text-align:center; font-family: centure;"><strong>Reserve Bank of india </strong></h1>     <?php
                        echo date("Y-m-d");
                         ?>
                         &copy;All copy Rigths Are Reserved by Akhil golu gusain 2018-<?php echo date("Y");?>
                 <img src="2.png" height="50px; "></center>
                  
    
                 </div>
      <div class="row" style="background-color: black;" >
        
          <ul>
                      <li><a class="active" href="home.php">
                        <i class="fa fa-home"></i> </a></li>
                      <li><a  href="Create.php">Create account
                      <i class="fas fa-user-circle"></i></a></li>
                      <li>
                         <a href="detail.php">Details
                          <i class="fas fa-info-circle"></i>
                         </a>
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
                      <!-- <i class="fas fa-piggy-bank" style="font-size: 40px;  color: white; margin-left:60px; margin-top: 5px;"></i> -->
                    </ul> 
         
      </div>
    </div>
    <hr>
    

    <div class="row">
      <div class="col-md-4">
        <img src="6.jpg" width="95%" height="350px;">
      </div>
       <div class="col-md-4">
     <marquee WIDTH=350 HEIGHT=50 BEHAVIOR=ALTERNATE><h2 style="font-family: centura">Reserve Bank India</h2></marquee>
         <form onsubmit="return valid()">   
      <label class="lable">Enter Account Number</label>
      <input class="form-control" type="TEXT" name="an" id="an" placeholder="Enter Account Number">
        <label class="lable">Enter Pin</label>
        <input class="form-control" type="Password"  name="p" id="p" placeholder="Enter 4 digit pin">
        <br><input class="form-control btn btn-danger " type="submit" name="submit" value="Login">

       </form><br>
       <a class="btn btn-success form-control" href="Create.php">Create Account</a>
       
       
       
        <?php
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'bank');
  if(isset($_REQUEST['submit']))
  {
  $an=$_REQUEST['an'];
  $p=$_REQUEST['p'];
  
  $q="select * from bank where ACNO='$an' && PIN='$p'";
  $rs=mysqli_query($con,$q);
  $x=mysqli_fetch_array($rs);
  if($x>0)
  {
    session_start();
    $_SESSION['loguser']=$x[2];
    $_SESSION['user']=$x[0];
    header('location:home.php');
    }
    
  else
  {
    echo "<center><h3>Invalid User Name or Password<br><a href='create.php'>Create Account</a></h3>";
  }
  }
?>      
      </div>
       <div class="col-md-4">
        <img src="9.png" width="90%" height="350px;">
        
      </div>
    </div> 

  </body>
  </html>
