<?php 
	$con=mysqli_connect("localhost","id16166686_root","(*wTu6BKPXdUl#=}","id16166686_spark");
            
	if(!$con){
		die("connection to this daatabase failed due to".mysqli_connect_error());
	}

	
	?>
	<!DOCTYPE HTML>
<html lang="en">
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
		<title>TRANSACTION</title>
		<link rel="stylesheet" href="style2.css">
        <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
	</head>
<body>
<div class="menu">
                
                <li style="float: left"><h3 class="text">TSF BANKING</h3></li>
                <li style="float:left"><img src="piggy-bank.png" class="logo"></li>
                <ul>
                <li><a href="history.php" >TRANSACTION</a></li>
                <li><a href="#"class ="active">CUSTOMERS</a></li>
                <li><a href="index.html">HOME</a></li>
                </ul>
</div>
				<?php	if(isset($_POST['submit'])){
		$to = $_POST['user'];
		$amount = $_POST['amount'];
		$from = $_POST['name'];
	
	if ($amount <= 0){?> 
		<div class="hghlt">
		<h3 class="ye">Amount can not be null/zero
			<br>To go back-<a href="customer.php" style=color:#0446c8>click here</a>
		</h3>
	    <img src="wrong.png" id="img">
	</div>
		
<?php		
exit();
	}

	$sum = "UPDATE customer SET `balance`=`balance`+'$amount' WHERE name='$to'";
	mysqli_query($con,$sum);
	
	
	$sub = "UPDATE customer SET `balance`=`balance`-'$amount' WHERE name='$from'";
	mysqli_query($con,$sub);	
	$update = "INSERT INTO tranhis(`sender`, `receiver`, `balance`) VALUES('$from', '$to', $amount)";
	mysqli_query($con,$update);
?>
<div class="hghlt">
		<h3 class="ye">Successful Transaction !!
			<br>To go back-<a href="customer.php" style=color:#0446c8>click here</a>
		</h3>
	    <img src="tick.png" id="img">
	</div>
<?php
}
?>
	</body>
	<div class="footer">
            <p>Developed by:Ritika Verma-(TSF-GRIPFEB-21)</p>
          </div>
</html>
