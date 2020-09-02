<!DOCTYPE html>
<html>
<head>
	<title>Imag Loader</title>
	<style type="text/css">
		div{
			border-style: double;
			border-color: rgb(233,22,134);
			border-width: 10px;
			border-radius: 10px;
			margin: auto;
			padding: 5px;
			opacity: 1;
		}
	</style>
</head>
<body>

</body>
</html>

<?php
	//echo "test call!";
	$conn= new mysqli("localhost","root","","gal");
	if ($conn) {
		echo "connected!<br>";
	}
	else{
		echo "not connected" .mysqli_error($conn);
	}

	$dir= "images/";
	
	$rnd=rand(1,13);
	if ($rnd==7 || $rnd==6 || $rnd==9 || $rnd==1|| $rnd==8) {
		$rnd=13;
	}
	echo $rnd;
	
	echo "<br>";


	$qry= "SELECT photo FROM restu WHERE id=$rnd";
	
	$res=mysqli_query($conn, $qry);

	while ($row=mysqli_fetch_row($res))
    {	
    	
    	$path=$dir.$row[0];
    	echo "<div>";
    	echo "<img src='$path' height=200 wide=200 alt='image' style='border-radius: 5px;;'><br>";
    	//print_r($row[0]."<br>"); 
    	echo "</div>";
    }

    //please create a table to start from 1



	//.............................
	echo "<br>";
	echo "<br>";

	echo "Random Num is:" .rand(1,10);

?>
