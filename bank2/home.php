<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
  	<title>	
	</title>
</head>
<body>
           <?php
          include('index.php')
         ?>
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-4">
        <img src="6.jpg" width="95%" height="350px;">
      </div>
       <div class="col-md-4">
        <marquee WIDTH=350 HEIGHT=50 BEHAVIOR=ALTERNATE><h2 style="font-family: centura">Reserve Bank India</h 2></marquee>

           <p style="font-size: 20px; font-family: centura">
       About OnlineSBI 
State Bank of India is India's largest bank with a network of over 15000 branches and 5 associate banks located even in the remotest parts of India. State Bank of India (SBI) offers a wide range of banking products and services to corporate and retail customers.
The portal provides anywhere, anytime, online access to accounts for State Bank's Retail and Corporate customers. 
      </p>

<center><a class="btn btn-danger" href="logout.php"><i class="fas fa-power-off"></i> <?php echo  $_SESSION['loguser'] ?>
</a></center>
         
              
      </div>
       <div class="col-md-4">
        <img src="9.png" width="90%" height="350px;">
        
      </div>
    </div> 
  </div>
  </body>
  </html>
