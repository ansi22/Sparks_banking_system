<?php 

	
$con=mysqli_connect("localhost","id16166686_root","(*wTu6BKPXdUl#=}","id16166686_spark");
            
if(!$con){
	die("connection to this daatabase failed due to".mysqli_connect_error());
}
	if(isset($_GET['name'])){
		$Name=$_GET['name'];
	}

	$q="SELECT * From customer WHERE name='$Name'";
	$result=mysqli_query($con,$q);
?>


<!DOCTYPE HTML>
<html lang="en">
<head>
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
                
                <li style="float: left"><h3 class="text">SPARKS BANKING</h3></li>
                <li style="float:left"><img src="piggy-bank.png" class="logo"></li>
                <ul>
                <li><a href="history.php" >TRANSACTION HISTORY</a></li>
                <li><a href="#"class ="active">CUSTOMERS</a></li>
                <li><a href="index.html">HOME</a></li>
                </ul>
                </div>
  	
 <h2 >Transaction Details</h2>
 <br><br>
    <div style="overflow-x:auto;">
        <table class="tbl"> 
           <th>CUSTOMER ID</th>
           <th>NAME </th>
           <th>EMAIL</th>
		   <th>CURRENT BALANCE</th>
           <tr>
			<?php  
				$row=mysqli_fetch_array($result)
			?>
			<td><?php echo  $row["id"]; ?></td><td><?php echo  $row["name"]; ?></td><td><?php echo  $row["email"]; ?></td><td><?php echo  $row["balance"]; ?></td>
           </tr>

        </table>
	</div>
        
	<form method='post' action='update.php' class="form">
<br><br>
<div style="overflow-x:auto;">
<table class="tbl"> 
		<tr>
		<td>Transfer To:</td>
		
		<input type="text" name="name" value="<?php echo $row['name'];?>" hidden>
		<td>
		<select name="user">
		
		<option>*select*</option>
   
			<?php  
				$qt="select * from customer";
				$result1=mysqli_query($con,$qt);
				while($row=mysqli_fetch_array($result1)){
			?>
        <option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>

			<?php }
			?>
			
            </select></td></tr> 
			<tr><td>Amount:</td><td><input type="text" name="amount"></td></tr>
			<tr><td></td><td><input type="submit" class="button" name="submit" value="Transfer"></td></tr>
	</table>
</div>
</form>

</body>
<div class="footer">
            <p>Developed by:Ritika Verma-(TSF-GRIPFEB-21)</p>
          </div>
</html>
