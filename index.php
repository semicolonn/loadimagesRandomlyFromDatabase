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

	$qry= "SELECT photo FROM restu";

	$res=mysqli_query($conn, $qry);
	if (mysqli_num_rows($res)>0){
		while($row = $res->fetch_assoc()) {
    	$path= $dir.$row['photo'];
    	//echo "<br>";
    	//echo"<hr>";
    	echo "<img src='$path' height='200' width='200'>";
    }
	}
	else{
		echo "<br>no record found!";
	}
	echo "<br>";
	echo "<br>";

	echo rand(0,5);

?>
