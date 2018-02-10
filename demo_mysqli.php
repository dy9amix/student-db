<?php
$servername = "localhost";
$username = "demo_db";
$password = "password";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$name = $_POST['name'];
$dateofbirth = $_POST['dateofbirth'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phoneno = $_POST['phoneno'];

// attempt insert query execution
$sql = "INSERT INTO students (name, date_of_birth, email , sex , phoneNo) VALUES ('$name', '$dateofbirth' , '$email' , '$gender' , '$phoneno')";
if($conn->query($sql) === TRUE ){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $conn->error;
}

	$conn->close();
?>

