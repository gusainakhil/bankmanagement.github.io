<!DOCTYPE html>
<html>
<head>
   <script type="text/javascript">
function valid()
{
var b=document.getElementById("p").value;
var c=document.getElementById("ci").value;
if(b=="")
{
alert("Enter a pin");
return false;
}
if(c=="")
{
alert("Enter  amount");
return false;
}
}
</script>
	<style>
	
      }
  .lable{
    color: white ;
    font-family:Centaur;
    font-size: 20px;  
        }
        .navbar {

  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

	</style>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<title>	
	</title>
</head>
         <?php
          include('index.php')
         ?>
      <div class="container-fluid">
      <br><div class="row">
      <div class="col-md-4">  
        <img src="12.png" height="350px" width="400px;">
        
      </div>
      <div class=" col-md-4"style="background-color:#333 " >
        <form onsubmit=" return valid()" method="POST">
          <h1 class="h3" style="text-align: center; font-family: centure; color:white;" >
         Deposit
          </h1>
        <label class="lable">Enter Pin</label>
        <input class="form-control" type="TEXT"  name="p" id="p" placeholder="Enter 4 digit pin">
        <label class="lable">Enter amount</label>
        <input class="form-control" type="text" placeholder="Enter Amount Name" name="ci" id="ci">
        <br><input class="form-control  " type="submit" name="submit" value="Deposit">
       </form><br><br>  
      </div>
		</div> 
</div>	
<?php

$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'bank');  

 
 $tid="select transaction_id from tran";
    $e=mysqli_query($con,$tid);
    $r=mysqli_fetch_array($e);
    print_r($r);
   
if(isset($_REQUEST['submit']))
{
 $a=$_SESSION['user'];
 $p= $_POST['p'];
 $c= $_POST['ci'];




$q="select * from bank where  ACNO='$a' and PIN='$p'";
$rs=mysqli_query($con,$q);
$x=mysqli_num_rows($rs);




if($x>0)
{
  $r=mysqli_fetch_array($rs);
   $camt=$r[6];
   $camt=$camt+$c;
   $q="update bank set  AMOUNT='$camt' where ACNO='$a'";
   mysqli_query($con,$q);
    $rs=mysqli_query($con,$q);
        $d=date('d/m/y');
        $t=date('h:i:s');
        $dt=$d."  ".$t;

        $q="insert into tran( ACNO,dt,AMOUNT,DS) values('$a','$dt','$c','deposit')";

        mysqli_query($con,$q);

   echo "<br><center><h3>your current account balance= $camt</center></h3>";
}
else
  echo "<center><h3>Invalid Account Number  or pin</h3></center>";

}

 ?>





</body>
</html>