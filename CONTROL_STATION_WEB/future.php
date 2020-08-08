<!--Author: Ramachandran A Dr.Gireeshan MG-->
<!--Used to demonstrate the future-->
<!--Page used to accept the number of sensors/hardware modules-->
<!DOCTYPE html>
<html>
  <head>
    <title>The Third Eye - Future</title>
    <meta charset="utf-8">
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
</style>
<body>
<img src="./logo.png" class="rotate" width=80 height=80 />
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
<br>
<!--Accept the number of sensors to set up the system-->
<form style="border-style: dashed;border-color:red;" action="viewfuture.php" method="post">
<center>
<h4 style="color:white">Select the number of sensors</h4>
<select name="num">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>  
<input type="submit" value="Go" />
</center>
<br>
</form>


</body>
</html>
