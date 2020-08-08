// Author:Ramachandran A Dr.Gireeshan MG
// php script used to communicate with android app
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
foreach($result as $item)
{
    $res['data'][] = array(
     
         'alarm'=>$item['alarm'],
         'time'=>$item['details'], 
         'lat'=>$item['lat'],
         'lon'=>$item['lon']

    );
   
}
$myJSON = json_encode($res);
echo $myJSON;
$conn->close();
?>
