<!DOCTYPE html>
<html>
<head>
  <style>
i 
{
  font-size: 15px;
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
          color: red;
          font-size: 18PX;
      }
  .lable{
    color: white ;
    font-size: ;
    font-family:Centaur;
        }
  
  </style>
  <script type="text/javascript">
function valid()
{
var a=document.getElementById("p").value;
var b=document.getElementById("n").value;
var c=document.getElementById("f").value;
var d=document.getElementById("e").value;
var e=document.getElementById("ph").value;
var f=document.getElementById("a").value;
var g=document.getElementById("a").value;
var h=document.getElementById("ci").value;
var i=document.getElementById("s").value;
if(a=="")
{
alert("Enter pin  is Mandoty");
return false;
}
if(b=="")
{
alert("Enter name is Mandoty");
return false;
}
if(c=="")
{
alert("Enter  Father name Mandoty");
return false;
}
if(d=="")
{
alert("Enter email is Mandoty");
return false;
}
if(e=="")
{
alert("Enter phone  is Mandoty");
return false;
}
if(f=="")
{
alert("Enter amount Mandoty");
return false;
}
if(g=="")
{
alert("Enter city name Mandoty");
return false;
}
if(h=="")
{
alert(" state Mandoty");
return false;
}
if(i=="")
{
alert("country Mandoty");
return false;
}
}
</script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>	
	</title>
</head>

<body>
  <div class="cont">
      <div class="row">

        <center><h1 style="text-align:center; font-family: centure;"><strong>Reserve Bank of india </strong></h1><center>     <?php
                        echo date("Y-m-d");
                         ?>
                         &copy;All copy Rigths Are Reserved by Akhil golu gusain 2018-<?php echo date("Y");?>
                 <img src="2.png" height="50px; ">   
                 </div>
      <div class="row" style="background-color: black;  " >
        
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
                       <!--<i class="fas fa-piggy-bank" style="font-size: 40px;  color: white; margin-left:60px; margin-top: 5px;"></i> -->
                    </ul> 
         
      </div>
    </div>
    <hr>

      <!--this is createpage -->
      <div class="container-fluid">
      <br><div class="row">
      <div class="col-md-4">  
        <img src="3.png" height="400px;">
      </div>
      <div class=" col-md-4"style="background-color:#333; height: 400px; overflow: auto;" >
        <form onsubmit= "return valid()" method="POST">
          <h1 class="h3" style="text-align: center; font-family: centure; color:white;" >
            Create Account
          </h1>
        <label class="lable">Create Pin</label>
        <input class="form-control" type="password"  name="p" id="p" placeholder="Create 4 digit pin">
        <label class="lable">Name</label>
        <input class="form-control" type="TEXT" name="n" id="n" placeholder="Name">
        <label class="lable">Father name</label>
        <input class="form-control" type="TEXT" name="f" id="f" placeholder="Father name">
        <label class="lable">Email</label>
        <input class="form-control" type="EMAIL" name="e"  id="e" placeholder="Enter email">
        <label class="lable">Ph.number</label>
        <input class="form-control" type="text" name="ph" id="ph"placeholder="Enter Mobile Number">
        <label class="lable">Enter amount</label>
        <input class="form-control" type="text"  name="a" id="a" placeholder="Enter amount">
         <label class="lable">City</label>
        <input class="form-control" type="text" placeholder="Enter city Name" id="ci" name="ci">
         <label class="lable"> Select state</label><br>
        <select class="form-control" name="s" id="s">
           <option>State</option>
          <option>uttarkhand</option>
          <option>uttarpradesh</option>
          <option value="Arunachal Pradesh">Arunachal Pradesh</option>
          <option value="Assam">Assam</option>
          <option value="Bihar">Bihar</option>
          <option value="Goa">Goa</option>
          <option value="Kelala">Kelala</option>
          <option value="Telangana">Telangana</option>
          <option value="manipur">manipur</option>
          <option value="Tripura">Tripura</option>
          <option value="west bangal">west bangal</option>
          <option value="Rajasthan">Rajasthan</option>
        </select>
        <label class="lable"> select county</label><br>
        <select class="form-control" name="c" id="c">
           <option  >country &nbsp;&nbsp; </option>
          <option  value="Afghanistan" >Afghanistan</option>
          <option value="Albania">Albania</option>
          <option value="Armenia">Armenia</option>
          <option value="Australia">Australia</option>
          <option value="Bhutan">Bhutan</option>
          <option value="Canada">Canada</option>
          <option value="China">China</option>
          <option value="India">India </option>
          <option value="Indonesia">Indonesia</option>
          <option value="Israel">  Israel</option>
          <option value="Mexico">Mexico</option>
          <option value="New Zealand"> New Zealand</option>
        </select>
         <label class="lable">Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;
        <label class="lable">Male</label>&nbsp;&nbsp;&nbsp;
        <input type="radio" name="gen" id="gen" value="male">
        <label class="lable">Female</label>
        <input type="radio" name="gen" id="gen" value="female"><br>
        <br><input class="form-control  " type="submit" name="submit" value="submit">
       </form><br> 
      </div>
      <div class="col-md-4">
      
        <a class="btn btn-danger" href="#">LOGIN</a>
         <?php 
       $con=mysqli_connect('localhost','root','');
    mysqli_select_db($con,'bank');
    
   if(isset($_REQUEST['submit']))
{
    $p=$_POST['p'];
    $n=$_POST['n'];
    $f=$_POST['f'];
    $e=$_POST['e'];
    $ph=$_POST['ph'];  
    $a=$_POST['a'];
    $ci=$_POST['ci'];
    $s=$_POST['s'];
    $c=$_POST['c'];
   $gen=$_POST['gen'];
     $ac="SBI";
     

 $q="select * from bank ";
 $rs=mysqli_query($con,$q);
 $x=mysqli_num_rows($rs);
 if($x>0)
 {
  $x++;
  $x=$x+100;
  $ac=$ac.$x;
 }
 else
  $ac="SBI101";
$q="insert into bank values('$ac','$p','$n','$f','$e','$ph','$a','$ci','$s','$c','$gen')";
$x=mysqli_query($con,$q);
if($x>0)
  echo "<center><br><h3>Account open securely with account number= $ac </h3></center>";
else
  echo "<center><h3>could not create account </h3></center>";
}   
     ?>
        
      </div>
		</div> 

   
</div>	
</body>

</html>