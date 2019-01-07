<?php
$db_host = "localhost";
$db_name = "id5007680_fcisih";
$db_pass = "fcisih";
$connection = mysqli_connect($db_host,$db_name,$db_pass);
if(!$connection){
  echo ("Failed to connect");
}
$db_select = mysqli_select_db($connection,$db_name);
if(!$db_select){
  echo ("Failed to select");
}
$sql = "SELECT * FROM `moisture_details`";
$sqldata = mysqli_query($connection,$sql);
 ?>
<!DOCTYPE html>
<html>
  <head><script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('#table_id td.y_n').each(function(){
        if ($(this).text() >= '14') {
            $(this).css('background-color','#ff9900');
        }
    });
});
</script>
    <style>
    .main-navigation{
  margin:0;
  padding : 0:
}
    ul {
  list-style: none;
  padding: 0;
  margin: 0;
  background: #1bc2a2;
}
ul li {
  display: block;
  position: relative;
  float: left;
  background: #1bc2a2;
}
li ul { display: none; }
ul li a {
  display: block;
  padding: 1em;
  text-decoration: none;
  white-space: nowrap;
  color: #fff;
}
ul li a:hover { background: #2c3e50; }
li:hover > ul {
  display: block;
  position: absolute;
}
li:hover li { float: none; }

li:hover a { background: #1bc2a2; }

li:hover li a:hover { background: #2c3e50; }

.main-navigation li ul li { border-top: 0; }
ul ul ul {
  left: 100%;
  top: 0;
}

ul:before,
ul:after {
  content: " ";
  display: table;
}
ul:after { clear: both; }
    table td ,tr{
    border: 1px solid black;
    border-collapse: collapse;
    padding: 30px;
}
th{
    border: 1px solid black;
    padding: 30px;
    }
#extra{
    padding: 30px;
}
#extras{
    padding: 30px;
}

    body{
      margin:0;
      padding:0;
    }
    .banner{
      width:100%;
      height: 30%;
    }
    .button_mo {
      float: inherit;
      position: relative;
      left: 800px;
      top : 5px;
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button_mo {
        background-color: white;
        color: black;
        border: 3px solid #4CAF50;
    }

    .button_mo:hover {
        background-color: #4CAF50;
        color: white;
    }
    .button {
      float: inherit;
      position: relative;
      left: 800px;
      top : 5px;
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 8px 16px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
    }

    .button {
        background-color: white;
        color: black;
        border: 3px solid #4CAF50;
    }

    .button:hover {
        background-color: #4CAF50;
        color: white;
    }
    </style>
  </head>
    <body bgcolor="white">
      <img class="banner" src="images/titleImage2.jpg" alt="banner">
       <a href="search.php" ><button onclick='' class='button_mo'>Moisture</button></a>
      <div>
        <ul class="main-navigation">
                <li><a href="#">SOUTH ZONE</a>
                  <ul>
                    <li><a href="#">Tamilnadu region</a>
                    <ul>
                          <li><a href="#">Thanjur</a></li>
                          <li><a href="#">virudhachalam</a></li>
                      <li><a href="#">villupuram</a>
                        <ul>
                     <li><a href="#">Vikravandi</a>
                       <li><a href="#">Gengee</a>
                      </li>
                    </ul>
                  </ul>
                </ul>
                <li><a href="#">NORTH ZONE</a>
                      <ul>
                        <li><a href="#">Delhi region</a>
                        <ul>
                          <a href="#">dubai</a>
                        <a href="#">summa1</a>
                      <a href="#">summa2</a></li>
                                </ul>
                        <li><a href="#">Punjab region</a></li>
                        <li><a href="#">Haryana region</a></li>
                        <li><a href="#">HP region</a></li>
                        <li><a href="#">UP region</a></li>
                        <li><a href="#">Rajasthan region</a></li>
                        </li>
                      </ul>
                <li><a href="#">EAST ZONE</a>
                  <ul>
                    <li><a href="#">Orissa region</a></li>
                    <li><a href="#">WB region</a></li>
                    <li><a href="#">Jharkand region</a></li>
                    <li><a href="#">Bihar Region</a></li>

                    </li>

                  </ul>
                <li><a href="#">WEST ZONE</a>
                  <ul>
                    <li><a href="#">Madhyapradesh region</a></li>
                    <li><a href="#">Maharashtra Region</a>
          <ul>
            <li><a href="#">Mumbai</a>
            <ul>
              <li><a href="#">Dadar</a></li>
              <li><a href="#">andheri</a></li>
                <li><a href="#">suburban</a></li>
          </ul>
            </li>
            <li><a href="#">Pune</a></li>
            <li><a href="#">Nashik</a></li>
            <li><a href="#">Beed</a></li>
          </ul>
                    </li>
                    <li><a href="#">Gujarat Region</a></li>
                    <li><a href="#">Chhattisgarh region</a></li>
                    </li>
                  </ul>
                  <li><a href="#">NORTH-EAST ZONE</a>
                    <ul>
                      <li><a href="#">Assam region</a></li>
                      <li><a href="#">NEF region</a></li>
                      <li><a href="#">Nagaland Region</a></li>
                      <li><a href="#">Arunachalpradesh Region</a></li>
                        <li><a href="#">Mannipur region</a></li>
                      </li>
                    </ul>
                  </ul>
        </ul>
      </div>
    
      <center>
     <h1>Details about Moisture</h1>
     <?php
     echo "<table id='table_id'>";
     echo "<tr><th>Date/Time</th><th>Room</th><th>Moisture</th><th>Stock</th><th>Crop</th><th>Location</th><th>Alert</th></tr>";
     while($row = mysqli_fetch_array($sqldata)){
     echo"<tr>";
     echo "<td>".$row["date/time"]."</td>";
     echo "<td>".$row["room_temperature"]."</td>";
     echo "<td class='y_n'>".$row["moisture_reading"]."</td>";
     echo "<td>".$row["stock"]."</td>";
     echo "<td>".$row["crop"]."</td>";
     echo "<td>".$row["location"]."</td>";
     echo "<td>".$row["alert"]."</td>";
     echo"</tr>";
      }
      echo "<button onclick='myFunction()' class='button'>Print</button>";
      ?>
<style>      
      @media print {
   body {
      -webkit-print-color-adjust: exact;
   }
}
</style>
      <script>
      function myFunction() {
          window.print();
      }
      </script>
    </center>
    
    <iframe width="450" height="260" style="border: 1px solid #cccccc;" src="https://thingspeak.com/channels/463736/charts/1?bgcolor=%23ffffff&color=%23d62020&dynamic=true&results=60&title=MOISTURE&type=spline&xaxis=DATE+%26+TIME&yaxis=MOISTURE+VALUE"></iframe>
    
    

   </body>
   </html>
  </body>
</html>
