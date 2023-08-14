<!DOCTYPE html>
<html>
<head>
	<title>MySQL Table Viewer</title>
</head>
<body>
	<h1>MySQL Table Viewer</h1>
	<?php
		// Define database connection variables
		$servername = 'DBServer';
		$username = 'DB_USER';
		$password = 'DB_PASSWORD';
		$dbname = 'DB_NAME';

		// Create database connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}

		// Query database for all rows in the table
		$sql = "SELECT * FROM employees";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
    		    // Output data of each row
                    while ($row = $result->fetch_assoc()) {
        		echo "Employee Number: " . $row["emp_no"] . "<br>";
      		  	echo "Birth Date: " . $row["birth_date"] . "<br>";
        		echo "First Name: " . $row["first_name"] . "<br>";
        		echo "Last Name: " . $row["last_name"] . "<br>";
        		echo "Gender: " . $row["gender"] . "<br>";
        		echo "Hire Date: " . $row["hire_date"] . "<br>";
        		echo "Email ID: " . $row["email_id"] . "<br>";
        		echo "<hr>";
   		    }
} else {
    echo "No records found";
}

// Close the connection
$conn->close();
?>
</body>
</html>
