<?php
 
 $con=mysqli_connect("localhost","root","","spark");
            
 if(!$con){
     die("connection to this daatabase failed due to".mysqli_connect_error());
 }

  $q="select * from tranhis";
  $result=mysqli_query($con,$q);
  $row_count=mysqli_num_rows($result);
  
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
		<title>TRANSACTION HISTORY</title>
    <link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	</head>
<body>
<div class="menu">
                
                <li style="float: left"><h3 class="text">SPARKS BANKING</h3></li>
                <li style="float:left"><img src="piggy-bank.png" class="logo"></li>
                <ul>
                <li><a href="#"class ="active" >TRANSACTION</a></li>
                <li><a href="customer.php">CUSTOMERS</a></li>
                <li><a href="home.html">HOME</a></li>
                </ul>
            </div>

<div>
 <h2>Transaction History</h2>
 </div>
 <br><br> <br>
<div style="overflow-x:auto;">
<table class="tbl"> 
  <th>SENDER NAME</th> <th>RECEIVER NAME</th> <th>AMOUNT</th> 
  <tbody>
    <tr align = center>
        <?php  
      while($row=mysqli_fetch_array($result)){
        ?>
  <td><?php echo  $row["sender"]; ?></td><td><?php echo  $row["receiver"]; ?></td> <td><?php echo  $row["balance"]; ?></td>
  <tr align = center>
  <?php }
  ?>
  </tr>
  </tbody>
  </table>
</div>
</body>
<div class="footer">
            <p>Developed by:Ritika Verma-(TSF-GRIPFEB-21)</p>
          </div>
</html>