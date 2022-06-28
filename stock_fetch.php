
<!DOCTYPE html>
<html>
<head>
<title>Retail management System</title>
<style>table {margin-left:10%;
border-collapse: collapse;
width: 80%;
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
</br>
</br>
<table>
  <div class="table-1" >
<tr>
<th>STOCK ID</th>
<th>STOCK SOLD</th>
<th>STOCK QUANTITY</th>

</tr>
</div>
<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "rms1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT st_number,stock_sold,stock_quantity FROM stock";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_Assoc()){
    echo "<tr><td> ". $row["st_number"]."</td><td> ". $row["stock_sold"]. " </td> <td>". $row["stock_quantity"]. " </td></tr>"  ;

  }

  echo "</table>";
}
 else {
  echo "0 results";
}