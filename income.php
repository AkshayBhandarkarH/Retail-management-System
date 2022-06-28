<?php
$host="localhost";
$username="root";
$password="";

try{
  $conn =new PDO("mysql:host=$host;dbname=rms1",$username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
  echo "connected successfully";
  }
catch(PDOException $e)
{
  echo"connection failed: ". $e->getMessage();
}
//form submitted data can be accessed by:
  //1.$_REQUEST:can be used for both get AND post METHOD
  //2.$_POST:can be used only FOR post METHOD
  //3.$_GET:
  $a="";
  $b="";
  $c="";
  if(isset($_POST['save_sales']))
 { 
$a=$_POST['total_spent'];
$b=$_POST['total_received'];
$c=$_POST['employee_salary'];
$d=$b -$c-$a ;
$sql="INSERT INTO  income(income_id,total_spent,total_received,employee_salary,p_amount) VALUES('".$_POST['income_id']."','".$_POST['total_spent']."','".$_POST['total_received']."','".$_POST['employee_salary']."','".$d."')";
$conn->query($sql);
}



?>
<html>
    <head></head>
    <title></title>
<style>
    #box1{
        margin: 15% 10% 10% 15%;
background-color: lightcoral;
padding: 10px 10px 50px 10px;
border-radius: 30px;
    }
#box2{
  margin-left:30%;
  position: relative;
    border-style:solid ;
background-color:aquamarine;
height:50%;
width:50%;
border-radius: 10px;
padding-left: 10px;

}
    </style>


<body>
    <div id="box1">
        
          <form action="" method="post">
            <h1 style="text-align:center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >CALCULATE EXPENDITURE</h1>
            <div class="nav">
            <div class="nav-header">
            
</div>
            </br>
        
            </div>
            <div id="box2">   

                    <label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">ENTER INCOME ID</label></br> 
                    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="text"name="income_id" placeholder=" ">


</BR>
<label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">ENTER TOTAL AMOUNT</label> 
</BR>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="text"name="total_spent" placeholder=" ">
</br>
</br>



<label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">ENTER TOTAL RECEIVED</label> 
</BR>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="text"name="total_received" placeholder=" ">
</br>
</br>
<label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >ENTER EMPLOYEE SALARY</label></br>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="TEXT" name="employee_salary" placeholder="">
</br>
</br>





<button style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="submit" name="save_sales"class="btn btn-primary" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Submit</button>
  

<a style="background-color:white; border:2px solid; text-decoration:none;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="income_fetch.php">view</a>
</br>
<a href="rms.php" class="nav1" style="text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:white;background-color:#585858;  border-radius:5px;padding:10px 10px 10px 10px;margin-left:45%;">HOME</a>

</div>
<h style="text-align:left;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">SELECT AS REQUIREMENT OF DATA</h>
    </form>
  

<a style="padding:10px 10px 10px 10px;height:30px;background-color:white; border:2px solid black;text-decoration:none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="fetch1.php">view purchase list</a>
</br>
</br>
</br>
<a style="padding:10px 37px 10px 10px;height:30px;background-color:white; border:2px solid black;text-decoration:none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="sales_fetch.php">view sales list</a>
</br></br>
</br>


    </form>
</div>
</body>
</html>