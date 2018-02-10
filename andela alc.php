<?php
include_once("config.php");
$sql = "SELECT * FROM students";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
</head>
<body>

<nav class="navbar navbar-expand-md bg-light navbar-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

<div class="container">
<div class="row">
  <div class="col-md-8">
    <div class="">
    </div>
  </div>
   <div class="col-md-2">
    <div class="delstu">
<button type="button" class="btn btn-danger btn-sm">Delete Student</button>      
  </div>
  </div>
  <div class="col-md-2">
    <div class="newdata">

      <!-- Trigger the modal with a button -->
<button type="button" class="btn btn-sucess btn-sm" data-toggle="modal" data-target="#myModal">New Student</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
      <form action="demo_mysqli.php" method="post">
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
  <input type="submit" name="submit"  class="btn btn-default" value="Add Records">
</form>
      </div>
      
    </div>

  </div>
</div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="well studata">
 <div class="table-responsive">
  <table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th>Select</th>
        <th>Name</th>
        <th>Date of Birth</th>
        <th>Sex</th>
        <th>Email</th>
        <th></th>
        <th>Phone Number</th>
      </tr>
    </thead>
    <tbody>
      <tr>
       <td> <input type="checkbox" name="name1" />&nbsp;</td>
        <td>John Doe</td>
        <td>21st of April 1998</td>
        <td>Male</td>
        <td>example@example.com</td>
        <td><input type="button" value="x" onclick="deleteRow(this)"></td>
        <td>080999999993</td>
      </tr>
      <?php
   

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $id = $row['id'];
      $name = $row['name'];
    $dateofbirth = $row['date_of_birth'];
    $email = $row['email'];
    $gender = $row['sex'];
    $phone = $row['phoneNo'];
    echo "<tr>
   <td> <input type='checkbox' name='buy[]' value='{$row['ID']}' /></td>
    <td>".$name."</td>
    <td>".$dateofbirth."</td>
    <td>".$gender."</td>
    <td>".$email."</td>
    <td><a href=\"edit.php?id=$row[id]\">Edit</a> | 
    <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">".Delete."</a></td> 
    <td>".$phone."</td>
    </tr>";
} 
    }
else {
    echo "0 results";
}

$conn->close();

      ?>
      </tbody>
  </table>
<script>
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("myTable").deleteRow(i);
}
</script>
</div>
    </div>
  </div>
</div>

</div>

</body>
</html>


