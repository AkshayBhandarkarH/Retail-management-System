<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>table {
border-collapse: collapse;
width: 80%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
margin-left:10%;

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
</BR>
<table>
<tr>
<th>Product_ID</th>
<th>Product Name</th>
<th>Product Price</th>
<th>Product Quantity</th>
<th>Total Price</th>
</tr>



<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "rms1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT P_id,P_name,P_price,P_quantity,total_price FROM product_list";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td> ". $row["P_id"]."</td><td> " . $row["P_name"]. "</td><td> " . $row["P_price"]. " </td> <td> " . $row["P_quantity"]. "</td><td>" . $row['total_price']. "</td></tr>";
  }
  echo "</table>";

} else {
  echo "0 results";
}



$conn->close();
?>
