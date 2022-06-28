
<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;


}
th {
background-color: #588c7e;
color: white;
}
</style>
</head>
<body>
  <a href="rms.php" class="nav1" style=" margin-right:70%;text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:white;background-color:#585858;  border-radius:5px;padding:10px 10px 10px 10px;margin-left:45%;">HOME</a>
</BR>
<BR>
<table>
  <div class="table-1" >
<tr>
  <th>TRANSACTION ID</th>
<th>PURCHASED PRICE</th>
<th>SOLD PRICE</th>
<th>PROFIT</th>

</tr>
</div>


<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "rms1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT t_id,purchased_price,sold_price,profit  FROM  transaction";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_Assoc()){
    echo "<tr><td> ". $row["t_id"]."</td><td>". $row["purchased_price"]."</td><td> ". $row["sold_price"]. "</td><td>" . $row["profit"]. " </td></tr> " ;

  }

  echo "</table>";
}
 else {
  echo "0 results";
}