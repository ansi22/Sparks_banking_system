<?php 
	$con=mysqli_connect("localhost","id16166686_root","(*wTu6BKPXdUl#=}","id16166686_spark");
            
	if(!$con){
		die("connection to this daatabase failed due to".mysqli_connect_error());
	}

	$q="select * from customer";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>

<!DOCTYPE HTML>
<html lang="en">
<head>

    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
		<title>CUSTOMER</title>
		<link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	</head>
<body>
<div class="menu">
                
                <li style="float: left"><h3 class="text">SPARKS BANKING</h3></li>
                <li style="float:left"><img src="piggy-bank.png" class="logo"></li>
                <ul>
                <li><a href="history.php" >TRANSACTION HISTORY</a></li>
                <li><a href="#"class ="active">CUSTOMERS</a></li>
                <li><a href="index.html">HOME</a></li>
                </ul>
                </div>
	
 
 
 <h2> To transfer click customer's name </h2>


  <br><br>
  <div style="overflow-x:auto;">
   <table  class="tbl">
	<thead>
		<th>CUSTOMER ID</th><th>NAME</th>
		<th>EMAIL</th>
		<th>BALANCE</th>
	</thead>
	<tbody>
		
        <tr align="center">
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["id"]; ?></td>
		<td> <a href = 'transfer.php?name=<?php echo $row["name"];?>' style=color:white><?= $row["name"]?></a></td><td><?php echo  $row["email"]; ?></td><td><?php echo  $row["balance"]; ?></td>
		<tr align="center">
		<?php }
		?>
		
		</tr>

        
	</tbody>
	</table>
			</div>
</body>
<div class="footer">
           <p> Developed by:Ritika Verma-(TSF-GRIPFEB-21)</p> 
          </div>
</html>
