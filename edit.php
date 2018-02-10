<?php
// including the database connection file
$servername = "localhost";
$username = "demo_db";
$password = "password";
$dbname = "mydb";

// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
} 
  $id = $_GET['id'];
 //selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM students WHERE id=$id");
 while($row = $result->fetch_assoc())
{
    $name = $row['name'];
    $dateofbirth = $row['dateofbirth'];
    $email = $row['email'];
    $gender = $row['gender'];
    $phoneno = $row['phoneno'];
}

?>
<html>
<head>    
     <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Edit Data</title>
</head>
 
<body>
    <a href="andela alc.php">Home</a>
  
      <form action="update.php" method="post">
      <div class="form-group">
        <label for="ID"></label>
        <input type = "number" class="form-control" name="id" value=<?php echo "$id";?> readonly>
          </div>
  <div class="form-group">
    <label for="email">Name:</label>
    <input type="text" name="name" class="form-control" id="names" required>
  </div>
 <div class="form-group">
    <label for="email">Date Of Birth:</label>
    <input type="date" class="form-control" name="dateofbirth" id="dob" required>
  </div>
<div class="form-group">
    <label for="email">Sex:</label>
    <input type="text" class="form-control" name="gender" id="sex" required>
  </div>
<div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name = "email" id="emailAddress" required>
  </div>
<div class="form-group">
    <label for="email">Phone Number</label>
    <input type="number" min="00000000000" max="99999999999" class="form-control" name = "phoneno" id="phone" required>
  </div>
  <input type="submit" name="update"  class="btn btn-default" value="UPDATE">
</form>   
</body>
</html>

