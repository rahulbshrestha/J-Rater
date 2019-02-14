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
	echo "Connected successfully to database! \n";
	echo "<br>";

	if(isset($_POST['submit'])) {
		$student_id = $_POST['student_id'];
		$firstname=$_POST['firstname'];
		$year=$_POST['year'];
		$major=$_POST['major'];

		$sqla= $conn->query("INSERT INTO student (student_id) VALUES ('$student_id')");

		$sqlb="INSERT INTO userInformation (student_id, name, years, major) 
		VALUES ('$student_id','$firstname','$year' ,'$major')";

		echo "1 record added! \n";
		
		echo "<meta http-equiv='refresh' content='0'>";
	}

	mysql_close($conn)

?>

</body>

</html>