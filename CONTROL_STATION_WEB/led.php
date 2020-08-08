<!DOCTYPE html>
<html>
  <head>
    <title>Alerting System</title>
    <meta charset="utf-8">
   <meta http-equiv="refresh" content="20">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
  
   <center>
    <table>
    <tr>
    <th><center>Ernakulam</center></th>
    <th><center>Palakkad</center></th>
    <th><center>Kollam</center></th>
    <th><center>Alappuzha</center></th>
    <th><center>Pathanamthitta</center></th>
    <th><center>Kottayam</center></th>
    <th><center>Idukki</center></th>
    <th><center>Thrissur</center></th>
    <th><center>Malappuram</center></th>
    <th><center>Kozhikode</center></th>
    <th><center>Wayanad</center></th>
    <th><center>Kannur</center></th>
    <th><center>Kasargod</center></th>
    <th><center>Thiruvananthapuram</center></th>
    </tr>
    <tr>
    <td id="ernakulam">
    <div id="ekm">
    </div>
    </td>
    <td id="palakkad">
    <div id ="pkd">
    </div>
    </td>
    <td id="kollam">
    <div id="klm">
    </div>
    </td>
    <td id="alappuzha">
    <div id="alp">
    </div>
    </td>
    <td id="pathanamthitta">
    <div id ="pta">
    </div>
    </td>
    <td id="kottayam">
    <div id="ktm">
    </div>
    </td>
   <td id="idukki">
    <div id="idk">
    </div>
    </td>
    <td id="thrissur">
    <div id ="tsr">
    </div>
    </td>
    <td id="malappuram">
    <div id="mpm">
    </div>
    </td>
    </td>
      <td id="kozhikode">
    <div id="kde">
    </div>
    </td>
    <td id="wayanad">
    <div id ="wyd">
    </div>
    </td>
    <td id="kannur">
    <div id="knr">
    </div>
    </td>
    <td id="kasargod">
    <div id="ksd">
    </div>
    </td>
    <td id="thiruvananthapuram">
    <div id="tvm">
    </div>
    </td>
   </tr>
    </table>
    
  </center>
 <audio id="siren">
  <source src="siren.mp3" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
  </body></html>
  <?php
   try {
    $host = 'localhost';
    $dbname = 'thirdeye';
    $username = 'root';
    $password = '';
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    } 
     catch (PDOException $pe) 
    {
     die("Could not connect to the database $dbname :" . $pe->getMessage());
    } 
   $today =date("j F Y");
   $threshold = 30000;
   if (! function_exists('imap_open')) {
        echo "IMAP is not configured.";
        exit();
    } 
    else 
    {
       $connection = imap_open('{imap.gmail.com:993/imap/ssl}INBOX', 'softwaresolutionszeus@gmail.com', 'zeussoftwaresolutions') or die('Cannot connect to Gmail: ' . imap_last_error());
        $ekm = imap_search($connection, 'SUBJECT "EKM" ON "'.$today.'"');
        $pkd = imap_search($connection, 'SUBJECT "PKD" ON "'.$today.'"');
        $klm = imap_search($connection, 'SUBJECT "KLM" ON "'.$today.'"');
        $tvm = imap_search($connection, 'SUBJECT "TVM" ON "'.$today.'"');
        $pta = imap_search($connection, 'SUBJECT "PTA" ON "'.$today.'"');
        $ktm = imap_search($connection, 'SUBJECT "KTM" ON "'.$today.'"');
        $alp = imap_search($connection, 'SUBJECT "ALP" ON "'.$today.'"');
        $tsr = imap_search($connection, 'SUBJECT "TSR" ON "'.$today.'"');
        $mlp = imap_search($connection, 'SUBJECT "MLP" ON "'.$today.'"');
        $koz = imap_search($connection, 'SUBJECT "KOZ" ON "'.$today.'"');
        $wyd = imap_search($connection, 'SUBJECT "WYD" ON "'.$today.'"');
        $knr = imap_search($connection, 'SUBJECT "KNR" ON "'.$today.'"');
        $ksd = imap_search($connection, 'SUBJECT "KSD" ON "'.$today.'"');
        $idk = imap_search($connection, 'SUBJECT "IDK" ON "'.$today.'"');
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
        $sqll = "SELECT number from sos";
        $resultt = $conn->query($sqll);
        //$conn->close();
        if (is_array($ekm))
        {      
          $nums=count($ekm);
          for ($i=0;$i<$nums;$i++)
          { 
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $ekm[$i], 0);
              $dt = $overview[0]->date;
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=50)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {    
                 ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("ekm").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
        <?php
          date_default_timezone_set("Asia/Calcutta");  
          $x = date("h:i:s");
          $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('EKM','".$x."','10.6300','76.6186')";
          $result = $conn->query($sql);    
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at EKM",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
       
              }
        }
      }}
         if (is_array($pkd))
        {
         
          $nums=count($pkd);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $pkd[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=50)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {  
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("pkd").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
        <?php
          date_default_timezone_set("Asia/Calcutta");  
          $x = date("h:i:s");
          $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('PKD','".$x."','10.6300','76.6186')";
          $result = $conn->query($sql);
         while ($row = $resultt->fetch_assoc())
         {
          $fields = array(
         "sender_id" => "BREACH",
         "message" => " Breach detected at PKD",
        "language" => "english",
         "route" => "p",
          "numbers" => $row['number'],
         "flash" => "1"
     );
    
        $curl = curl_init();
    
       curl_setopt_array($curl, array(
         CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
         CURLOPT_RETURNTRANSFER => true,
         CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => json_encode($fields),
          CURLOPT_HTTPHEADER => array(
            "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
            "accept: */*",
            "cache-control: no-cache",
            "content-type: application/json"
         ),
        ));
    
        $response = curl_exec($curl);
       $err = curl_error($curl);
    
       curl_close($curl);
    
      if ($err) {
        echo "cURL Error #:" . $err;
     }
      }
              }
        }
      }}
         if (is_array($klm))
        {
         
          $nums=count($klm);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $klm[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {    
               
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("klm").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
         <?php
          date_default_timezone_set("Asia/Calcutta");  
          $x = date("h:i:s");
          $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('KLM','".$x."','10.6300','76.6186')";
          $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at KLM",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
        }
      }}
       if (is_array($tvm))
        {
          
          $nums=count($tvm);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $tvm[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
                
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("tvm").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
         <?php
         date_default_timezone_set("Asia/Calcutta");  
         $x = date("h:i:s");
         $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('TVM','".$x."','10.6300','76.6186')";
         $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at TVM",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
        }
      }}
        if (is_array($pta))
        {
         
          $nums=count($pta);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $pta[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
                
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("pta").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
        <?php
        date_default_timezone_set("Asia/Calcutta");  
        $x = date("h:i:s");
        $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('PTA','".$x."','10.6300','76.6186')";
        $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at PTA",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
                    }      }
        }
      }
       if (is_array($ktm))
        {
         
          $nums=count($ktm);
          for ($i=0;$i<$nums;$i++)
          {
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $ktm[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
               
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("ktm").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
         <?php
          date_default_timezone_set("Asia/Calcutta");  
          $x = date("h:i:s");
          $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('KTM','".$x."','10.6300','76.6186')";
          $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at KTM",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
        }
      }
         if (is_array($alp))
        {
         
          $nums=count($alp);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $alp[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
                
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("alp").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
         <?php
         date_default_timezone_set("Asia/Calcutta");  
         $x = date("h:i:s");
         $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('ALP','".$x."','10.6300','76.6186')";
         $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at ALP",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
        }
      }}
         if (is_array($tsr))
        {
         
          $nums=count($tsr);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $tsr[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
                
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("tsr").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
        <?php
        date_default_timezone_set("Asia/Calcutta");  
        $x = date("h:i:s");
        $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('TSR','".$x."','10.6300','76.6186')";
        $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at TSR",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
        }
      }}
        if (is_array($mlp))
        {
       
          $nums=count($mlp);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $mlp[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
               
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("mlp").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
        <?php
         date_default_timezone_set("Asia/Calcutta");  
         $x = date("h:i:s");
         $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('MLP','".$x."','10.6300','76.6186')";
         $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at MLP",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
        }
      }}
        if (is_array($koz))
        {
          $nums=count($koz);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $koz[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
               
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("koz").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
        <?php
         date_default_timezone_set("Asia/Calcutta");  
         $x = date("h:i:s");
         $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('KOZ','".$x."','10.6300','76.6186')";
         $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at KOZ",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
        }}
      }
         if (is_array($wyd))
        {
          $nums=count($wyd);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $wyd[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
              
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("wyd").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
        <?php
          date_default_timezone_set("Asia/Calcutta");  
          $x = date("h:i:s");
          $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('WYD','".$x."','10.6300','76.6186')";
          $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at EKM",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
        }
      }}
        if (is_array($knr))
        {
          $nums=count($knr);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $knr[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
                
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("knr").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
         <?php
         date_default_timezone_set("Asia/Calcutta");  
         $x = date("h:i:s");
         $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('KNR','".$x."','10.6300','76.6186')";
         $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at KNR",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }}
              }
        }
      }
        if (is_array($ksd))
        {
          $nums=count($ksd);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $ksd[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
               
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("ksd").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
        <?php
         date_default_timezone_set("Asia/Calcutta");  
         $x = date("h:i:s");
         $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('KSD','".$x."','10.6300','76.6186')";
         $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at KSD",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
        }
      }}
         if (is_array($idk))
        {
          $nums=count($idk);
          for ($i=0;$i<$nums;$i++){
              $datetime = new DateTime();
              $overview = imap_fetch_overview($connection, $idk[$i], 0);
              $d = strtotime($overview[0]->date);
              $now = strtotime($datetime->format('Y-m-d H:i:s'));
              $diff = $now - $d;
              if($diff <=30)
              {
                $output2 = shell_exec("python detect2.py");
                if (strpos($output2, 'person') !== false) {   
               
               ?>
                 <script>
                 var warning ="<img class=\"blink\" src=\"warning.png\" width=\"100px\" height=\"100px\" height=100 />";
                 document.getElementById("idk").innerHTML = warning;
                 var x = document.getElementById("siren"); 
                 x.play();
                 window.open("http://wmccpinetop.axiscam.net/view/viewer_index.shtml?id=35", "_blank", "toolbar=yes,top=500,left=500,width=400,height=400");    
                </script>
        <?php
         date_default_timezone_set("Asia/Calcutta");  
         $x = date("h:i:s");
         $sql = "INSERT INTO alarms(alarm,details,lat,lon) VALUES('IDK','".$x."','10.6300','76.6186')";
         $result = $conn->query($sql);
        while ($row = $resultt->fetch_assoc())
        {
         $fields = array(
        "sender_id" => "BREACH",
        "message" => " Breach detected at IDK",
       "language" => "english",
        "route" => "p",
         "numbers" => $row['number'],
        "flash" => "1"
    );
   
       $curl = curl_init();
   
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
         CURLOPT_MAXREDIRS => 10,
         CURLOPT_TIMEOUT => 30,
         CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
         CURLOPT_CUSTOMREQUEST => "POST",
         CURLOPT_POSTFIELDS => json_encode($fields),
         CURLOPT_HTTPHEADER => array(
           "authorization: wXt4h3a86iBS1ADHkGYToVWEKqvCIx29flMRj7msQNecUgbP0OpZO2xjLSzYHgru5VDaP0UIlKke1RmJ",
           "accept: */*",
           "cache-control: no-cache",
           "content-type: application/json"
        ),
       ));
   
       $response = curl_exec($curl);
      $err = curl_error($curl);
   
      curl_close($curl);
   
     if ($err) {
       echo "cURL Error #:" . $err;
    }
     }
              }
                 }       }
     }
    } }
    ?>
    
