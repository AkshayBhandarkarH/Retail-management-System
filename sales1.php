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
  $a=0;
  $b=0;
  $c=0;
  
  if(isset($_POST['save_sales']))
 { $a=$_POST['s_quantity'];
  $b=$_POST['sold_price'];
  $c=$a * $b;
 $sql="INSERT INTO  sales(s_id,s_quantity,sold_price,total_sp ) VALUES('".$_POST['s_id']."','".$_POST['s_quantity']."','".$_POST['sold_price']."','".$c."')";
$conn->query($sql);
}

?>
<html>
    <head></head>
    <title></title>
<style>
    #box1{
        
      margin-left:30%;
        WIDTH:50%;
background-color: lightcoral;
padding: 10px 10px 50px 10px;
border-radius: 30px;
    }
#box2{
  padding-left:10%;
    border-style:solid ;
background-color:aquamarine;
height:50%;
width:50%;
border-radius: 10px;
margin-left: 20%;

}
    </style>


<body>
    <div id="box1">
         <form action="" method="post">
            <h1 style="text-align:center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >WHAT ABOUT TODAY!!!!</h1>
            </br>

            <div id="box2">   
</br>
           <label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">PRODUCT ID</label></br> 
            <select style="height:30px ;width:100px; border-style:solid;border-width:2px;border-radius:2px;"name="s_id" id=""  >

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
<p style="height: 2px;">REFERNCES FOR PRODUCT AS PER ID </p>
<select style="height:30px ;width:100px; border-style:solid;border-width:2px;border-radius:2px;"name="p_NAME" id=""  >
<option value="gold winner">gold winner</option>
  <option value="pepsodent">pepsodent</option>
  <option value="gillete">gillete</option>
  <option value="sugar">sugar</option>

  <option value="colgate">colgate</option>
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

</hr>
</br>
</br>
<label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">SOLD QUANTITIY</label> 
</br>
</br>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="text"name="s_quantity" placeholder=" number">
</br>
</br>
                
<label style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;" >SOLD PRICE</label>
</br>
    <input style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="TEXT" name="sold_price" placeholder="price in ruppees">
</br>


  <button style="height:30px; border-style:solid;border-width:2px; border-radius:2px;"type="submit" name="save_sales"class="btn btn-primary" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">Submit</button>
  <a style="background-color:white; border:2px solid; text-decoration:none;font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;height:30px; " href="sales_fetch.php">view</a>
</br>
</br>
<a style="padding:10px 10px 10px 10px;height:30px;background-color:white; border:2px solid black;text-decoration:none;font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; " href="fetch1.php">view purchase list</a>
</div>

    </form>
</div>
</body>
</html>