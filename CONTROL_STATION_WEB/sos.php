<!DOCTYPE html>
<html>
  <head>
    <title>The Third Eye - Login</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./police.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
input[type=button] {
 background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

}
iframe
    {
      background: black;
    }
body{
      background-color: black;
     } 
 .rotate {
  animation: rotation 8s infinite linear;
}

@keyframes rotation {
  from {
    transform: rotate(0deg);
  }
  to {
    transform: rotate(359deg);
  }
}
input[type=submit] {
 background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;

}
form
{
    float:left;
}
input[type=text], select {
  width: 200px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
</style>
<body>
<img src="./logo.png" class="rotate" width=80 height=80 />
<br><br>
 <!--Retrieve and display the sos numbers from the database-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thirdeye";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from sos";
$result = $conn->query($sql);

$conn->close();
?>
<table class="table table-dark table-striped">
<thead>
<tr>
<th>SOS ID</th>
<th >Number</th>
</tr>
</thead>
<tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['id']) ?></td>
                            <td><?php echo htmlspecialchars($row['number']); ?></td>
                        	
                        </tr>
                    <?php endwhile; ?>
                </tbody>
</table>
 <!--add sos messages-->
<form action="addsos.php" method="post">
<h6 style="color:white">Add SOS Number</h6>
<input type ="text"  name="number" placeholder="Number" required /><br><br>
<input type="submit" value="Add" />
</form>
 <!--Delete SOS messages-->
<form action="delsos.php" method="post">
<h6 style="color:white">Delete SOS Number</h6>
&nbsp;&nbsp;&nbsp;&nbsp;<input type ="text"  name="id" placeholder="SOS ID" required /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Delete" />
&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" onclick="goback()" class="btn btn-success" value ="Back" />
</form>
<script>
function goback() {
  window.location.replace("http://localhost/main.php");
}
</script>
</body>
</html>