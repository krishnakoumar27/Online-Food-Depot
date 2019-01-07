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
  <head>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
      <script type="text/javascript">
      
      $(document).ready(function(){
    $('#table_id td.y_n').each(function(){
        if ($(this).text() >= '14') {
            $(this).css('background-color','#ff9900');
        }
    });
});
</script>
    <meta charset="utf-8">
    <title>Moisture Details</title>
    <style>
    body{
      margin:0;
      padding:0;
    }
    .banner{
      width:100%;
      height: 30%;
      left:50px;
    }
    .button {
      float: inherit;
      position: relative;
      left: 500px;
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
    table, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 20px;
}
@media print {
   body {
      -webkit-print-color-adjust: exact;
   }
}
    </style>
  </head>
  <body bgcolor="white">
    <img class="banner" src="../images/titleImage2.jpg" alt="banner">
    <center>
     <h1>Details about Moisture</h1>
     <?php
     echo "<table id='table_id'>";
     echo "<tr><th>ID</th><th>Date/Time</th><th>Room</th><th>Moisture</th><th>Stock</th><th>Crop</th><th>Alert</th></tr>";
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
