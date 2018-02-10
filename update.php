
<?php
$servername = "localhost";
$username = "demo_db";
$password = "password";
$dbname = "mydb";

$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$u_id = $_POST['ids'];
$name = $_POST['name'];
$dateofbirth = $_POST['dateofbirth'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phoneno = $_POST['phoneno'];

echo "$u_id";


/*$sql = "UPDATE students SET name='$name', date_of_birth='$dateofbirth', email='$email', sex='$gender', phoneNo='$phoneno' WHERE id = $id" ;

if ($conn->query($sql) === TRUE){
	echo "Records updated successfully";
}
else{
	echo "Error updating record" .$conn->error;
}

$conn->close();*/
?>
