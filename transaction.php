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
$a=$_POST['purchased_price'];
$b=$_POST['sold_price'];
$d=$b - $a ;
$sql="INSERT INTO  transaction(t_id,purchased_price,sold_price,profit ) VALUES('".$_POST['t_id']."','".$_POST['purchased_price']."','".$_POST['sold_price']."','".$d."')";
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
            <h1 style="text-align:center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >WHAT ABOUT TODAY!!!!</h1>
            <div class="nav">
            <div class="nav-header">
            
</div>
            </br>
        
            </div>
            <div id="box2">   

                    <label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">TRANSACTION ID</label></br> 
            <select style="height:30px ;width:100px; border-style:solid;border-width:2px;border-radius:2px;"name="t_id" id=""  >

            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            
<option value="4">4</option>

<option value="5">5</option>

<option value="6">6</option>

<option value="7">7</option>

<option value="8">8</option>

<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>

<option value="15">15</option>

<option value="16">16</option>
<option value="17">17</option>

<option value="18">18</option>

<option value="19">19</option>
<option value="20">20</option>



            </select>
</BR>
<label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">PURCHASED PRICE</label> 
</BR>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="text"name="purchased_price" placeholder=" ">
</br>
</br>



<label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >SOLD_PRICE</label></br>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="TEXT" name="sold_price" placeholder="">
</br>
</br>





<button style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="submit" name="save_sales"class="btn btn-primary" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Submit</button>
  

<a style="background-color:white; border:2px solid; text-decoration:none;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="transact_fetch.php">view</a>
</br>
<a href="rms.php" class="nav1" style="text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:white;background-color:#585858;  border-radius:5px;padding:10px 10px 10px 10px;margin-left:45%;">HOME</a>

</div>
<h style="text-align:left;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">SELECT AS REQUIREMENT OF DATA</h>
    </form>
  

<a style="padding:10px 10px 10px 10px;height:30px;background-color:white; border:2px solid black;text-decoration:none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="fetch1.php">VIEW PURCHASE LIST</a>
</br>
</br>
</br>
<a style="padding:10px 37px 10px 10px;height:30px;background-color:white; border:2px solid black;text-decoration:none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="sales_fetch.php">VIEW SALES LIST</a>
</br></br>
</br>
<a style="padding:10px 37px 10px 10px;height:30px;text-decoration:none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="income.php">CALCULATE TOTAL EXPENDITURE </a>
</br></br>
</br>

    </form>
</div>
</body>
</html>