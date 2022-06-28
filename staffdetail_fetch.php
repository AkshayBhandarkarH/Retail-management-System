
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
<th>STAFF_NAME</th>
<th>STAFF_SALARY</th>
<th>STAFF_ ADDRESS</th>
</tr>
</div>
</br>
</br>



<?php


// Create connection
$conn = new mysqli("localhost", "root", "", "rms1");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT staff_name,staff_salary,staff_address FROM staff";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_Assoc()){
    echo "<tr><td> ". $row["staff_name"]. "</td><td>" . $row["staff_salary"]. "</td><td>".$row["staff_address"]."</td></tr>";

  }

  echo "</table>";
}
 else {
  echo "0 results";
}