<!--Author: Ramachandran A Dr.Gireeshan MG-->
<!--Login Screen -->
<!DOCTYPE html>
<html>
  <head>
    <title>The Third Eye</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./police.css" />  <!--External CSS design to integrate with the police lamp-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
 
 <!--Internal UI design-->
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
#login_container  
{
  width:30%; 
  margin:auto; 
  padding:120px 10px 10px 10px; 
  background-position:center 10px; 
  background-repeat:no-repeat; 
  background-color:#1f1f14; 
  border-radius: 20px;
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
  border-radius: 4px;

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
  border-radius: 4px;

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
input[type=password], select {
  width: 200px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
h1{
font-size: 60px;
font-family: 'Futura';
color: #fff;
text-shadow: 0 0 5px #fff, 0 0 10px #fff, 0 0 20px #ff0080, 0 0 30px #ff0080, 0 0 40px #ff0080, 0 0 55px #ff0080, 0 0 75px #ff0080;
text-align: center;
}
</style>
<body>
 <!--Thirdeye Logo-->
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
<br><br>
 <h1>Login</h1>
 <center>
   <div id ="login_container" >
 <!--Login form action set to login.php-->
 <form id="login" action="login.php" method="post" >
 <input type ="text" id="usr"  name="username" placeholder="username..." required /><br><br>
 <input type ="password" id="pass"  name="password" placeholder="password..." required /><br><br>
 <input type="submit" class="btn btn-success" value ="Login" />
 </form>
 <br>
 <input type="button" value="Clear" onclick="clearr()" />
 <br><br>
 <input type="button" value="Team" onclick="credits()" />
 </center>
</div>
 <script>
function clearr() {

  document.getElementById("login").reset(); //clear the textfields and reset the form
}
function credits() {
  window.location.assign("http://localhost/credits.html"); //switch to credits page
}
</script>
</body>

</html>
