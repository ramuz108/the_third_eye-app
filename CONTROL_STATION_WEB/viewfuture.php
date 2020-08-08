<!--Author: Ramachandran A Dr.Gireeshan MG-->
<!--Page used to enter the details of the sensors along with latlon, name/scope to be given and camera the ip associated-->
<!DOCTYPE html>
<html>
  <head>
    <title>The Third Eye - Future</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<style>
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
input[type=text] {
width:200px;

}
h3{
    color:white;
}
</style>
<body>
<img src="./logo.png" class="rotate" width=80 height=80 />
<br>
<br>
 <!--Generating custom form based on the number of sensors-->
<form style="border-style: dashed;border-color:red;" action="futurefinal.php" method="post">
<center>
<!--Custom form based on the number of sensors entered-->
<?php
$numbers = $_POST["num"];
for($i=1;$i<=$numbers;$i++)
{
 echo "<h3>Sensor {$i}</h3><br>";
 echo "<input type='text' name='S{$i}' placeholder='Enter the scope for sensor {$i}' /><br><br>";
 echo "<input type='text' name='L{$i}' placeholder='Enter the latitude for sensor {$i}' /><br><br>";
 echo "<input type='text' name='LO{$i}' placeholder='Enter the longitude for sensor {$i}' /><br><br>";
 echo "<input type='text' name='C{$i}' placeholder='Enter the ip address of the camera {$i}' /><br><br>";
 
}
?>
<input type="submit" value="Go" />
</center>
</form>
</body>
</html>
