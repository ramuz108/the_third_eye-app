<!--Author: Ramachandran A Dr.Gireeshan MG-->
<!--Page to load and display the alarms from the database-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body{
      background-color: black;
     } 
</style>
</head>
<body>
<!--Connect to database and retrieve alarms-->	
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

$sql = "SELECT * from alarms";
$result = $conn->query($sql);

$conn->close();
?>
<table class="table table-dark table-striped">
<thead>
<tr>
<center><th>Alarm id</th></center>
<th >Alarm</th>
<th >Time</th>
<th >Latitude</th>
<th >Longitude</th>
</tr>
</thead>
<tbody>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
			<!--Display as columns-->
                            <td><?php echo htmlspecialchars($row['alarmid']) ?></td>
                            <td><?php echo htmlspecialchars($row['alarm']); ?></td>
                            <td><?php echo htmlspecialchars($row['details']); ?></td>	
			    <td><?php echo htmlspecialchars($row['lat']); ?></td>
                            <td><?php echo htmlspecialchars($row['lon']); ?></td>	
                        </tr>
                    <?php endwhile; ?>
                </tbody>
</table>
</body>
</html>
