<html>
<body>

<?php
	$dbhost = 'localhost';
	$dbuser = 'rashrestha';
	$dbpass = 'YsSAm5Aa';
	$dbname = 'wry';
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if(!$conn){
		die('Could not connect: ' . mysqli_error());
	}
	echo "Connected successfully to database! \r\n";

	if(isset($_POST['submit'])) {
		$instructor_id = $_POST['instructor_id'];
		$firstname = $_POST['firstname'];
		$department=$_POST['department'];
		
		$sqla= $conn->query("INSERT INTO instructor (instructor_id, name, department) VALUES ('$instructor_id', '$firstname', '$department')");

		echo "1 record added! \n";
	}
	mysql_close($conn);

?>

</body>

</html>


