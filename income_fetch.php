
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
    <H1 style="">MONTHLY EXPENDITURE</H1>
<tr>
<th>INCOME ID</th>
<th>TOTAL AMOUNT</th>
<th>TOTAL RECIEVED</th>
<th>EMPLOYEE SALARY</th>
<th>PROFIT PER MONTH</th>

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
$sql="SELECT income_id,total_spent,total_received,employee_salary,p_amount FROM income";
$result=$conn->query($sql);
if($result->num_rows>0){
  while($row=$result->fetch_Assoc()){
    echo "<tr><td> ". $row["income_id"]."</td><td> ". $row["total_spent"]. "</td><td>" . $row["total_received"]. "</td><td>".$row["employee_salary"]."</td><td>".$row["p_amount"]."</td></tr>";

  }

  echo "</table>";
}
 else {
  echo "0 results";
}