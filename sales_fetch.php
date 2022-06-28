
<!DOCTYPE html>
<html>
<head>
<title>Retail management system</title>
<style>table {
border-collapse: collapse;
width: 80%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
margin-right: 10%;
margin-left: 10%;
}
th {
background-color: #588c7e;
color: white;
}
</style>
</head>
<body>
<table>
<tr>
<th>SALES ID</th>
<th>SOLD QUANTITY</th>
<th>SOLD PRICE</th>
<th>TOTAL SELLING PRICE</th>

</tr>


</br>
</br>



<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "rms1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT s_id,s_quantity,sold_price,total_sp FROM sales";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_Assoc()){
    echo "<tr><td> ". $row["s_id"]."</td><td> ". $row["s_quantity"]. "</td><td>" . $row["sold_price"]. "</td><td>".$row["total_sp"]."</td></tr>";

  }

  echo "</table>";
}
 else {
  echo "0 results";
}