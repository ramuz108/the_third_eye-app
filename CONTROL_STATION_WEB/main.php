 <!--Author: Ramachandran A Dr.Gireeshan MG-->
 <!--Main Page of the Control Station-->
<!DOCTYPE html>
<html>
  <head>
    <title>The Third Eye</title>
    <meta charset="utf-8">
   <meta http-equiv="refresh" content="10">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./police.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
<style>
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
form
{
    float:left;
}
#logs {
  float: left ;
} 
</style>
<body>
<div id="logs">
<img src="./logo.png" class="rotate" width=80 height=80 />
 <!--Get the server ip and display for the android app to connect-->
<?php
$localIP = getHostByName(getHostName());          
echo "<p style='color:yellow'>IP Address</p>";
echo "<p style='color:red'>{$localIP}</p>"
?>
</div>
 <!--Police lamp UI container-->
<div class="lightbar">
  <div id="light-1" class="light strobe blue">
    <div class="inner-light"></div>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
  </div>
  <div id="light-2" class="light strobe blue">
    <div class="inner-light"></div>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
  </div>
  <div id="light-3" class="light strobe blue">
    <div class="inner-light"></div>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
  </div>
  <div id="light-4" class="light strobe red delay">
    <div class="inner-light"></div>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
  </div>
  <div id="light-5" class="light strobe red delay">
    <div class="inner-light"></div>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
  </div>
  <div id="light-6" class="light strobe red delay">
    <div class="inner-light"></div>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>
    <span class="bulb"></span>

  </div>
</div>
<br><br> <!--iframe which loads the alerter page-->
 <iframe src="led.php" width=1550 height=220 ></iframe>
<br> <!--iframe which loads the alarm database-->
 <iframe src="db.php" width=1550 height=220 ></iframe>
 <br><br>
  <!--Clear the alarm database-->
 <form action="http://localhost/clear.php" method="post">
 <input type="submit" class="btn btn-success" value ="Clear alarms" />
 </form>

 <!--save the alarms to a txt file-->
 <form action="http://localhost/save.php" method="post">
 &nbsp;&nbsp;<input type="submit" class="btn btn-success" value ="Save to file" />
 &nbsp;&nbsp;<input type="button" onclick="gotosos()" class="btn btn-success" value ="SOS" />
 </form>
 <!--Future scope page-->
 <form action="http://localhost/future.php" method="post">
 &nbsp;&nbsp;<input type="submit" class="btn btn-success" value ="Future Scope" />
 </form>
  <!--Logout to main page-->
 <form action="http://localhost" method="post">
 &nbsp;&nbsp;<input type="submit" class="btn btn-success" value ="Logout" />
 </form>
<!--go to sos page-->
 <script>
function gotosos() {
  window.location.replace("http://localhost/sos.php");
}
</script>

</body>
</html>
