<html>
<head>
	<title>Electricity Bill Calculator</title>
</head>

<body>
	<center>
		<h1>Electricty Bill Calculator</h1>
		<form action="" method="POST">
		<label for="unit">Enter units consumed </label>
		<input type="number" name="unit" min="0" required>
		<button type="submit">Calculate</button>
		</form>
	</center>
</body>
</html>

<?php

if(isset($_POST['unit'])){
	echo "<center>";
	$unit=$_POST['unit'];
	echo "Units consumed : $unit <br>";
	
	if($unit <=100){
		$rate=5.50;
	}
	elseif($unit <=300){
		$rate=7.70;
	}
	elseif($unit <=500){
		$rate=8.0;
	}
	else{
		$rate=9.80;
	}
	
	$bill =$unit * $rate;
	echo " Amount payable : $bill $";
	echo "</center>";
}


?>