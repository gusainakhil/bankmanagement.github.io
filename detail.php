<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<title>
		
	</title>
</head>
<body>
	<div class="cont">
		         <?php
          include('index.php')
         ?>
         <div class="row">
         	<div class="col-md-4">
         		
         	</div>
         	<div class="col-md-4">
         		<h1 style="font-family: centaur">
         			<marquee WIDTH=350 HEIGHT=50 BEHAVIOR=ALTERNATE>Personal Deatail</marquee>
         		</h1>
         		<?php
         	
         	
         	  $a=$_SESSION['loguser'];
         	  $con=mysqli_connect('localhost','root','');
         	  mysqli_select_db($con,'bank');
         	  $q="select * from bank where name='$a'";
         	  $x=mysqli_query($con,$q); 
         	  $rs=mysqli_fetch_array($x);

         	  echo "<table class= table  border=5>
         	   <tr class=table-dark><td>Account Number=$rs[0]</td></tr>
         	   <tr  class=table-primary><td>Father Name= $rs[3]</td></tr>
         	   <tr class=table-info><td>Phone number=$rs[5]</td></tr>
         	   <tr class=table-success><td>Email id=$rs[4]</td></tr>
         	   <tr class=table-danger><td>Current Balance=$rs[6]</td></tr>
         	   <tr class=table-secondary><td>City=$rs[7]</td></tr>
         	   <tr class=table-primary><td>State=$rs[8]</td></tr>
         	   <tr class=table-warning><td>Country=$rs[9]</td></tr>
         	   <table>";
               
         	 ?>

         	
         		
         	</div>
         	<div class="col-md-4">
         		
         	</div>

         	
         </div>
		
	</div>

</body>
</html>