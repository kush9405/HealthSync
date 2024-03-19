<?php
// Establish connection to your MySQL database
$servername = "localhost";
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "your_database"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$relation = $_POST['relation'];

// Prepare SQL statement to insert data into the database
$sql = "INSERT INTO profiles (name, age, email, gender, relation) VALUES ('$name', '$age', '$email', '$gender', '$relation')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
