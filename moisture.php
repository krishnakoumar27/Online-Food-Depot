<?php
$connection = mysqli_connect("localhost","id5007680_fcisih","fcisih");
$select = mysqli_select_db($connection,"id5007680_fcisih");
if(isset($_POST['data'])){
$data = $_POST['data'];
$date = $_POST['date'];
$sql = "INSERT INTO `moisture_details`(`id`, `date/time`, `room_temperature`, `moisture_reading`, `stock`, `crop`, `location`, `alert`) VALUES ('','$date','','$data','new','wheat','mumbai','good crop can be stored for 1 more month')";
$result = mysqli_query($connection,$sql);
}
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<script type="text/javascript">
  document.getElementById('date').value = Date();
</script>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input id="date" name="date" placeholder="Date">
      <input type="text" name="data" placeholder="Moisture-Readding">
      <input type="submit" name="submit" value="Submit">
      <input type="submit" name="submit" value="Cancle">
    </form>
  </body>
</html>
