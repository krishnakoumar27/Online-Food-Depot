<?php
$connection = mysqli_connect('localhost','id5007680_fcisih','fcisih');
$select_db = mysqli_select_db($connection,'id5007680_fcisih');
$sql ="SELECT token_no FROM test1";
$result =mysqli_query($connection,$sql);

while($row =mysqli_fetch_array($result)){
 
}

mysqli_close($connection);
?>
<?php
$con = mysqli_connect("localhost","id5007680_fcisih","fcisih");
if (!$con)
{
die('Could not connect: ' . mysql_error());
}
$select = mysqli_select_db($con,"id5007680_fcisih");
if (!$con)
{
die('Could not connect: '. mysql_error());
}
if(isset($_POST['token_no'])){
$token = $_POST['token_no'];
$result = mysqli_query("SELECT * FROM test1 WHERE token_no = $token");
while($row = mysqli_fetch_array($result))
 {
$token= $row['token'];
$ronumber= $row['ronumber'];
$commodity= $row['commodity'];
$cropyear= $row['cropyear'];
$bagtype= $row['bagtype'];
$shed= $row['shed'];
$stack= $row['stack'];
$moisture= $row['moisture'];
}

mysqli_close($con);
}
?>
<html>
<body>
<form name="cityselect">
    <select name="menu" onChange="location=document.cityselect.menu.options[document.cityselect.menu.selectedIndex].value;" value="GO">
        <option value="dmo.php"></option>
        <option value="dmo.php">1</option>
        <option value="dmo2.php">2</option>
        <option value="dmo3.php">3</option>
    </select>
</form>
<form>
  <table  style="color:purple;border-style:groove; height:150px;width:350px" background="3.jpg">
        <tr>
<td style="font-family:Copperplate Gothic Bold">&nbsp;</td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">tokenname:</td>
            <td class="auto-style4">
                <input id="Text1" type="text" value="suresh"/></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">Ro number:</td>
            <td class="auto-style4">
                <input id="Text2" type="text" value="12098"></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Commodity:</td>
            <td class="auto-style4">
                <input id="Text3" type="text" value="white"></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Cropyear:</td>
            <td class="auto-style4">
                <input id="Text4" type="text" value="2019"></td>
        </tr>
        <tr>
            <td style="color:red;background-color:aqua;" class="auto-style3">bagtype:</td>
            <td class="auto-style4">
                <input id="Text5" type="text" value="dry" ></td>
        </tr>
        <tr>
           <td style="color:red;background-color:aqua;" class="auto-style3">Shed:</td>
            <td class="auto-style4">
                <input id="Text6" type="text" value="S3" ></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">Stack:</td>
            <td class="auto-style4">
                <input id="Text7" type="text" value="21"></td>
        </tr>
        <tr>
             <td style="color:red;background-color:aqua;" class="auto-style3">moisture:</td>
            <td class="auto-style4">
                <input id="Text8" type="text" value=""></td>
        </tr>
        <tr>
            <td></td>
        </tr>
    </table>
    <input type="submit" name="submit" value="Submit">
    <input type="submit" name="sumbit" value="Cancle">
</form>
</body>
</html>
