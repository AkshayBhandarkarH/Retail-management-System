
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
  if(isset($_POST['save_details']))
 { 

 $sql=  "INSERT INTO  stock(st_number,stock_sold,stock_quantity ) VALUES('".$_POST['st_number']."','".$_POST['stock_sold']."','".$_POST['stock_quantity']."')";


$conn->query($sql);
}



?>
<html>
    <head></head>
    <title>Retail management system</title>
<style>
    #box1{
        margin-left:20%;
background-color: lightcoral;
padding: 10px 10px 50px 10px;
border-radius: 30px;
margin-right: 20%;
    }
#box2{

    margin-left: 30%;
    border-style:solid ;
    padding-left:10px;
background-color:aquamarine;
height:50%;
width:40%;
border-radius: 10px;

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
           
             <label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">ENTER STOCK_ID</label> 
</br>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="text"name="st_number" placeholder=" number">
</br>
</br>
<label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">ENTER STOCK SOLD</label> 
</br>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="text"name="stock_sold" placeholder=" number">
</br>
</br>
<label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">ENTER STOCK QUANTITY</label> 
</br>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="text"name="stock_quantity" placeholder=" number">
</br>
</br>

<button style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="submit" name="save_details"class="btn btn-primary" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Submit</button> 
</br>
</br>
<a style="height:30px;background-color:white; border:2px solid black;text-decoration:none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="stock_fetch.php">view</a>
</br>
</br>



</div>
<h style="text-align:left;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">SELECT AS REQUIREMENT OF DATA</h>
    </form>
    <a style="padding:10px 37px 10px 10px;height:30px;background-color:white; border:2px solid black;text-decoration:none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="sales_fetch.php">view sales list</a>
</br></br>
</br>

<a style="padding:10px 10px 10px 10px;height:30px;background-color:white; border:2px solid black;text-decoration:none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="fetch1.php">view purchase list</a>
</br>
</br>
</br>


</div>

</body>
</html>