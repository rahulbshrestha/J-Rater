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
		$courseid = $_POST['courseid'];
		$coursename=$_POST['coursename'];
		$courselocation=$_POST['courselocation'];
		
		$sqla= $conn->query("INSERT INTO course (course_id, name, location, time_start, time_end) VALUES ('$courseid', '$coursename', '$courselocation', NULL, NULL)");

		echo "1 record added! \n";
	}
	mysql_close($conn)

?>

</body>

</html>