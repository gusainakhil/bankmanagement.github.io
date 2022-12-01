<!DOCTYPE html>
<html>
<head>
     
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
      <div class="col-md-4"> <br><br> 
        <center><h1 style="color:red; font-family:centaur;">
          PRINT YOUR  <BR>
          PASSBOOK
        </h1></center>
       <!-- <img src="13.jpg" height="300" width="350px;"> -->
      </div>
      <div class=" col-md-4"style="background-color:#333; overflow:scroll; height: 430px;" >
        <form onsubmit="return valid()">
          <h1 class="h3" style="text-align: center; font-family: centure; color:white;" >
         Account summary
          </h1>

        <br><input class="form-control  " type="submit" name="submit" value="Summary">
       </form> 
       <?php
 $con=mysqli_connect('localhost','root','');
 mysqli_select_db($con,'bank');
 $id= $_SESSION['user'];	
 if(isset($_REQUEST['submit']))
 {
   
      $q="select * from tran where ACNO='$id'";
        $x=mysqli_query($con,$q);
      echo "<center><table class=table>";
      echo "<tr><td style=color:red >A/C NO</td><td style= color:red>Date ND Time</td><td style= color:red>Amount</td><td style= color:red>Description</td><tr>";
   while($r=mysqli_fetch_array($x))
 {
  echo "<tr><td style =color:orange><strong>$r[1]</str></td><td style =color:black>$r[2]</td><td style =color:blue>$r[3]</td><td style =color:green>$r[4]</td></tr>";
  echo "</table";

    }
}

 ?>      
.
      </div>
      <div class="col-md-4">
              </div>
		</div> 
</div>	

</body>
</html>