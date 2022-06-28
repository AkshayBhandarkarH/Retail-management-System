<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
@media screen and (max-width: 768px) {
    #wrapper { width:100%; }
 }

/* Tabled Portrait */
@media screen and (max-width: 768px) {
    #wrapper { width:100%; }
 }

 /* iphone */
@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
    image1 { max-width: 100%; }
}

/* ipad */
@media only screen and (min-device-width : 768px) and (max-device-width : 1024px) {
image1.image2.image3{ max-width: 100%; }
}

body{
opacity:0.9;
background-color:darkslateblue;
}
.header-1{
opacity:0.7;
background-color: black;
background-size: contain;
text-align: center;
height: 50px;
border-radius: 10px;
width:100%;
COLOR:WHITE;
}

.box-3{
background-color:white;
}
.div.scroll{
position: relative;
background-color: black;
width: 110px;
height: 110px;
overflow: scroll;
}
.nav{
border-radius: 10px;
text-align: right;
background-color:darkgray;
height:100px;
width:100%;
}
.nav-bg{

color:BLACK;
text-decoration: none;
opacity: 0.9;
border-radius: 5px;
padding:  5px 5px 5px 5px ;
padding-bottom: 0px;


}
.nav-bg.nav-bg:hover{
color: WHITE;
}

.bg-image1{
margin: 10px 10px 10px 10px;
position:fixed;
background-color:grey;
border-radius: 10px;
padding:10px 10px 10px 10px;


}
.bg-image2{
margin: 10px 10px 10px 10px;
position:fixed;
background-color:grey;
border-radius: 10px;
padding:10px 10px 10px 10px;

margin-left: 34%;
}
.bg-image3{
margin: 10px 10px 10px 10px;
position:fixed;
background-color:grey;
border-radius: 10px;
padding:10px 10px 10px;
margin-left: 66%;
}
.clearfix::after {
overflow:inherit;
}

.bg-text{
text-align: center;
background-color:darkslateblue;
border-radius: 10px;
width:100%;
opacity:0.9;

}
.col-1{
background-color: black;
position:absolute;
top:80%;
bottom:0px;
border-radius: 5px;
width:99%;
}

    </style>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="rms.css">

    <title>Document</title>
</head>

<body>
  <div="box-1">
  <div class="scroll">
   <nav class="nav">
   <h1 class="header-1">RETAIL MANAGEMENT SYSTEM</h1>

        <a href="login.php" target="blank"class="nav-bg">HOME</a>
        <a href="staffdetails.php" target="blank"class="nav-bg">STAFF DETAILS</a>
        <a href="sales_fetch.php" class="nav-bg"target="blank">SALES</a>
        <a href="stock_fetch.php"class="nav-bg" target="blank" >STOCK</a>
    </nav>
    <div  >

        <div class="bg-text"><h2 >WELCOME TO YOUR STORE!!!</h2></div>
</div>
<div class="box-2">
        <div class="bg-image1" ><a href="#" target="blank"><img src="a.jpg" alt="img-thumbnail" width="485px" height="300px" class="clearfix">
        </a>
    </div>
        <div class="bg-image2"><a href="#" target="blank"><img src="OIP (2).jpg" alt="img-thumbnail" width="463px" height="300px" class="clearfix"></a></div>
        <div class="bg-image3"><a href="#" target="blank"><img src="PngItem_2413601.png" alt="img-thumbnail" width="480px" height="300px" class="clearfix"></a>
    </div>
  </div>
</div>
</div>
  <div class="box-3">
  <div class="col-1">
    <br/>
    <br/>
    <a href="#" style="color:white; text-decoration:none;padding-left:10px;padding-top:10px;"" >FACEBOOK</a></br>

    <a href="#" style="color:white; text-decoration:none;padding-left:10px; padding-top:10px"" >TWITTER</a></br>
    <a href="#" style="color:white; text-decoration:none;padding-left:10px; padding-top:10px"" >INSTAGRAM</a></br>
    <a href="#" style="color:white; text-decoration:none;padding-left:10px;padding-top:10px;"" >GITHUB</a></br>
</div>
    <div>
    </div>
</div>
</body>
</html>
