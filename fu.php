<!DOCTYPE html>
<html>
<head>
   <script type="text/javascript">
function valid()
{
var a=document.getElementById("an").value;
var b=document.getElementById("p").value;
var c=document.getElementById("am").value;
var d=document.getElementById("ts").value;

if(a=="")
{
alert("Account number is  Mandoty");
return false;
}
if(b=="")
{
alert("Enter a pin");
return false;
}
if(c=="")
{
alert("Enter amount");
return false;
}
if(d=="")
{
alert("Enter benificery account number");
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
        <img src="11.png" height="400px" width="400px;">
        
      </div>
      <div class=" col-md-4"style="background-color:#333 " >
        <form onsubmit="return valid()">
          <h1 class="h3" style="text-align: center; font-family: centure; color:white;" >
         Fund Transfer
          </h1>
          <label class="lable">Enter Account Number</label>
        <input class="form-control" type="TEXT" name="an" id="an" placeholder="Enter Account Number">
        <label class="lable">Enter Pin</label>
        <input class="form-control" type="TEXT"  name="p" id="p" placeholder="Enter 4 digit pin">
        <label class="lable">Enter amount to transfer</label>
        <input class="form-control" type="text" placeholder="Enter Amount to transfer" name="am" id="am">
        <label class="lable">Enter Account Number to transfer</label>
        <input class="form-control" type="text" placeholder="Enter Amount to transfer" name="ts" id="ts">
        <br><input class="form-control  " type="submit" name="submit" value="Transfer">
       </form>  
      </div>
		</div> 

<?php
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'bank');
   if(isset($_REQUEST['submit']))
   {
    $an=$_REQUEST['an'];
    $p=$_REQUEST['p'];
    $am=$_REQUEST['am'];
    $ts=$_REQUEST['ts'];

     $q="select * from bank where ACNO='$an' and Pin='$p'";
     $rs= mysqli_query($con,$q);
     $x=mysqli_num_rows($rs);
     if($x>0)
     {
           $r=mysqli_fetch_array($rs);
           $camt=$r[6];
           if($camt>=$am)
           {
            $s="select *from bank where ACNO='$ts' ";
            $rs1=mysqli_query($con,$s);
            $x1=mysqli_num_rows($rs1);
            if($x1>0)
            {
                  $r1=mysqli_fetch_array($rs1);
                  $tamt=$r1[6];
                  $camt=$camt-$am;
                  $tamt=$tamt+$am;
                  $q= "update bank set AMOUNT='$camt' where ACNO='$an'";
                  mysqli_query($con,$q);
                  /* transfer query */
                   $d=date('d/m/y');
                     $t=date('h:i:s');
                     $dt=$d."  ".$t;
                 $q="insert into tran( ACNO,dt,AMOUNT,DS) values('$an','$dt','$am' ,'transfer')";
                     mysqli_query($con,$q);


                  $q="update bank set AMOUNT= '$tamt' where ACNO='$ts'";
                  mysqli_query($con,$q);
                  /* transfer query */
                  $d=date('d/m/y');
                     $t=date('h:i:s');
                     $dt=$d."  ".$t;
                 $q="insert into tran( ACNO,dt,AMOUNT,DS) values('$ts','$dt','$am' ,'receive')";
                     mysqli_query($con,$q);
                  echo "<center><h1>Transfer successfully</center></h1>";
            }
            else
              echo "<center><h1>invali benificery accoount</h1><center>";
           }
           else
            echo "<center><h1>insufficent balance</h1><center>";
     }
     else
      echo " <center><h1>invalid account or pin </h1><center>";
   }
 ?>
</div>	
</body>
</html>