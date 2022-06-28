
<?php 
    include('connection.php');
    
    $query="SELECT * from product_list";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($conn,$query);
$result=mysqli_fetch_assoc($data);
echo $result['P_number']."".$result['P_name']."".$result['P_price']."".$result['P_quantity'];
if($total!=0)
{
    
    while(($result=mysqli_fetch_assoc($data)))
    {
    echo "
        <tr>
        <th>".$result['P_number']."</th>
        <th>".$result['P_name']."</th>
        <th>".$result['P_price']."</th>
        <th>".$result['P_quantity']."</th>
        
";



    }
}
else{
    echo "no records found";
}



    ?>
<html>
    <head>
        <title>
            
        </title>
    </head>

    <body>
        <table border="2" style="width:40%; float:left;">
        <tr>
           
        <th>Product_no</th>
        <th>Product_price</th>
        <th>Product_name</th>
        <th>Product_quantity</th>

    </tr>
    




    </body>
</html>