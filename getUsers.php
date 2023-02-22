<?php
// Connect to the database
$host = "localhost";
$user = "username";
$pass = "password";
$db = "myDatabase";
$conn = mysqli_connect($host, $user, $pass, $db);

// Query the database for a list of users
$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);

// Convert the result set into an array of user objects
$users = array();
while ($row = mysqli_fetch_assoc($result)) {
	$user = array(
		"firstName" => $row["first_name"],
		"lastName" => $row["last_name"]
	);
	array_push($users, $user);
}

// Convert the array of user objects into JSON format and output it
header("Content-Type: application/json");
echo json_encode($users);

// Close the database connection
mysqli_close($conn);
?>
