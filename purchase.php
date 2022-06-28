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
$a="";
$b="";
$c="";
//form submitted data can be accessed by:
  //1.$_REQUEST:can be used for both get AND post METHOD
  //2.$_POST:can be used only FOR post METHOD
  //3.$_GET:
  if(isset($_POST['save_details']))
 { 
   
  $a=$_POST['P_price'];
  $b=$_POST['P_quantity'];
  $c=$a * $b;
  echo $c;
$sql="INSERT INTO  product_list(P_id,P_name,P_price,P_quantity,total_price ) VALUES('".$_POST['P_id']."','".$_POST['P_name']."','".$_POST['P_price']."','".$_POST['P_quantity']."','".$c."'

)";


$conn->query($sql);
 }



?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
           #box1{

        margin: 10% 10% 10% 10%;
background-color:lightcoral;
padding: 10px 10px 50px 10px;
border-radius: 30px;

    }
#box2{margin-left:30%;
  position: relative;
    border-style:solid ;
background-color:aquamarine;
height:50%;
width:50%;
border-radius: 10px;
padding-left: 10px;

}

        </style>
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="box1">
    <form action="" method="post">
     <h1 style="text-align:center; " style="text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">WHAT ABOUT TODAY!!!!</h1>
      <div id="box2">   
      
    <label style="text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >ENTER PRODUCT_ID </label>
    <div class="container">
    <input type="text" name="P_id"style="height:30px; border-style:solid;border-width:2px;border-radius:2px;" placeholder="number only once">
    </div>

    <label style="text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">ENTER PRODUCT_NAME</label>
    <div class="container" >
 
    <select style="height:30px ;width:100px; border-style:solid;border-width:2px;border-radius:2px;"name="P_name" id=""  >

  <option value="gold winner">gold winner</option>
  <option value="pepsodent">pepsodent</option>
  <option value="gillete">gillete</option>
  <option value="colgate">colgate</option>
  <option value="sugar">sugar</option>
  <option value="toordal">Toordal</option>
  <option value="masoor daal">Masoor daal</option>
  <option value="urad daal">urad daal</option>
  <option value="moong daal">moong daal</option>
  <option value="raw rice">raw rice</option>
  <option value="brown rice">brown rice </option>
  <option value="maida">maida</option>
  <option value="relish">relish</option>
  <option value="hot sauce">hot sauce</option>
  <option value="syrup">syrup</option>
  <option value="butter">butter</option>
  <option value="cheese">cheese</option>
  <option value="ghee">ghee</option>
  <option value="parachute">parachute</option>
  <option value="lux">lux</option>
  <option value="medimix">medimix</option>
  <option value="pen">pen</option>
  <option value="pencil">pencil</option>
  <option value="eraser">eraser</option>
    </select>
</div>
 <label style="text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">ENTER PRICE</label>
</br>
    <input style="height:30px; border-style:solid;border-width:2px;border-radius:2px;" type="text"name="P_price" placeholder="number " >
</br>
</br>
    <label  style="text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">ENTER PRODUCT_QUANTITY</label>
</form>
    <div style="padding-left:2px;">
    <div class="container">
    <input style="height:30px; border-style:solid;border-width:2px;border-radius:2px;"type="NUMBER"  name="P_quantity" placeholder="">
    </div>
    </br>
  <button style="height:30px; border-style:solid;border-width:2px; border-radius:2px;" type="submit" name="save_details"class="btn btn-primary">Submit</button>
  </br></br>
    <a href="fetch1.php" style=" border:solid 2px;background-color:white; paddinng-top:10px;text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; padding-left:5px;color:black;">view</a></br>
</br>
<a href="rms.php" class="nav1" style="text-decoration: none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:white;background-color:#585858;  border-radius:5px;padding:10px 10px 10px 10px;margin-left:45%;">HOME</a>

  </form>
</div>

</body>
</html>