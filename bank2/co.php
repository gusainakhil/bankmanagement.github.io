<!DOCTYPE html>
<html>
<head>
   <script type="text/javascript">
function valid()
{
var a=document.getElementById("an").value;
var b=document.getElementById("p").value;
var c=document.getElementById("ci").value;

if(a=="")
{
alert("Account number is  Mandoty");
return false;
}
if(b=="")
{
alert("Enter old pin");
return false;
}
if(c=="")
{
alert("Enter  new pin");
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
     <?php
          include('index.php')
         ?>
          <div class="container-fluid">
      <br><div class="row">
      <div class="col-md-4">  
        <img src="14.png" height="350px" width="300px">
        
      </div>
      <div class=" col-md-4"style="background-color:#333 " >
        <form onsubmit=" return valid()">
          <h1 class="h3" style="text-align: center; font-family: centure; color:white;" >
         Change Pin
          </h1>
          <label class="lable">Enter Account Number</label>
        <input class="form-control" type="TEXT" name="an" id="an" placeholder="Enter Account Number">
        <label class="lable">Enter old Pin</label>
        <input class="form-control" type="TEXT"  name="p" id="p" placeholder="Enter Old pin">
        <label class="lable">Enter New pin </label>
        <input class="form-control" type="text" placeholder="Enter New Pin" id="ci" name="ci">

        <br><input class="form-control  " type="submit" name="submit" value="Change Pin">
       </form><br><br>  
      </div>
    </div> 


    
  </div>

  <?php
   if(isset($_REQUEST['submit'])) 
  {
  $con=mysqli_connect('localhost','root','');
  mysqli_select_db($con,'bank');
  $an=$_REQUEST['an'];
  $p=$_REQUEST['p'];
  $ci=$_REQUEST['ci'];

$q= "select * from bank where ACNO='$an' and PIN='$p'";
$x=mysqli_query($con,$q);
$rs=mysqli_num_rows($x);
if($rs>0)
{
  $q="update bank set  PIN='$ci'where ACNO='$an'";
  mysqli_query($con,$q);
  echo " <center><h2>PIN Change</center></h2> ";
}
else
  echo "record not found";
}
   ?>

</body>
</html>