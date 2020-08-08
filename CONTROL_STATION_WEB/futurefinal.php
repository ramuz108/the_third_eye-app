<!--Author:Ramachandran A Dr.Gireeshan MG-->
<!--Used to demonstrate the alerting system based on the data recieved-->
<!DOCTYPE html>
<html>
  <head>
    <title>Alerting System - Future Scope</title>
    <meta charset="utf-8">
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./police.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <style>
     th, td {
  padding: 20px;
  color:DodgerBlue;
}
      .blink {
        animation: blinker 0.6s linear infinite;
        color: #1c87c9;
        font-size: 30px;
        font-weight: bold;
        font-family: sans-serif;
      }
      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
      .blink-one {
        animation: blinker-one 1s linear infinite;
      }
      @keyframes blinker-one {
        0% {
          opacity: 0;
        }
      }
      .blink-two {
        animation: blinker-two 1.4s linear infinite;
      }
      @keyframes blinker-two {
        100% {
          opacity: 0;
        }
      }
     body{
      background-color: black;
     } 
    b
    {
      color:DodgerBlue;
    }
    
    </style>
 
  </head>
 <body>
 <!--Police UI Container-->
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
<br><br>
<!--Based on the details recieved,create custom table to demonstrate the main screen-->
<?php

echo "<center><table><tr>";
if (isset($_POST['S1']) )
{
    $dt= $_POST['S1'];
    echo " <th><center>{$dt}</center></th>";
}
if (isset($_POST['S2']) )
{
    $dt= $_POST['S2'];
    echo " <th><center>{$dt}</center></th>";
}
if (isset($_POST['S3']) )
{
    $dt= $_POST['S3'];
    echo " <th><center>{$dt}</center></th>";
}
if (isset($_POST['S4']) )
{
    $dt= $_POST['S4'];
    echo " <th><center>{$dt}</center></th>";
}
if (isset($_POST['S5']) )
{
    $dt= $_POST['S5'];
    echo " <th><center>{$dt}</center></th>";
}
if (isset($_POST['S6']) )
{
    $dt= $_POST['S6'];
    echo " <th><center>{$dt}</center></th>";
}
if (isset($_POST['S7']) )
{
    $dt= $_POST['S7'];
    echo " <th><center>{$dt}</center></th>";
}
if (isset($_POST['S8']) )
{
    $dt= $_POST['S8'];
    echo " <th><center>{$dt}</center></th>";
}
if (isset($_POST['S9']) )
{
    $dt= $_POST['S9'];
    echo " <th><center>{$dt}</center></th>";
}
if (isset($_POST['S10']) )
{
    $dt= $_POST['S10'];
    echo " <th><center>{$dt}</center></th>";
}
echo "</tr></table></center>";
?>
</body>
</html>
