<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    *{
        margin :0;
    }
        header{
    display: flex;
    justify-content: space-between;
    align-items:center;
    padding:30px 10% ;
    height: 90px;
    background-color: #24252a;
    
}

.button{
    cursor: pointer;
}
.nav-links{
	margin: 0;
	padding: 0;
	overflow: hidden;
    
  
}

.nav-links li{
    display: inline-block;
    padding: 0px 20px;
}

.nav-links li a{
    transition: all 0,3s ease 0s;
    font-family:sans-serif;
    text-decoration:none;
    color:white;

}

.nav-links li a:hover{
    color:pink;
}

button{
    padding: 9px 25px;
   background-color:pink;
   border: none;
   border-radius: 50px;
   transition: all 0,3s ease 0s;
   cursor: pointer;
   
}

button:hover{
    background-color:pink;
}


.main{
    width: 100%;
    position: absolute;
    text-align: center;
    color: #fff;
    background-image:url(bg1.jpg);
   
    height: 63%;

     }
 


.main h1{
    font-size: 70px;
    margin-top: 80px;
    color: #123793;
}

.main p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}

.main-button{

    width:200px;
    padding: 15px 0;
    text-align: center;
    color: black;
    background: transparent;
    border: 2px solid #123793;
    font-weight: bold;
    border-radius: 25px;
    margin: 0;

}
.sale-price {
    color: red;
    font-weight: bold;
    font-size: 1.5em;
}
.regular-price {
    color: gray;
    text-decoration: line-through;
    font-size: 0.8em;
    display: block;
    margin-top: -10px;
}
.title {
    text-align: center;
    margin-top: 0;
    margin-bottom: 30px;
}
.description {
    line-height: 1.4;
    margin-bottom: 20px;
}
.features {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}
.feature {
    width: 45%;
    margin-bottom: 10px;
    font-size: 0.8em;
    line-height: 1.4;
}
.cta {
    background-color: red;
    color: white;
    padding: 10px 20px;
    text-align: center;
    text-decoration: none;
    display: block;
    margin: 0 auto;
    margin-top: 20px;
}


.container3{
    position: absolute;
    margin: 690px 120px;
    width: 380px;
    height: 500px;
    justify-content: space-between;
    border-radius: 5px;

    display: block;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background:pink;


}

.container1{
    position: absolute;
    margin: 690px 620px;
    width: 380px;
    height: 500px;
    justify-content: space-between;
    border-radius: 5px;
  
    display:block;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background:pink;
 

}

.container2{
    position: absolute;
    margin: 690px 1120px;
    width: 380px;
    height: 500px;
    justify-content: space-between;
    border-radius: 5px;
   
    display: block;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    background:pink;
 

}

.products{
    
}




    </style>
</head>
<body>
    
<header>
       
       <img  src="/img/s (1).png" alt="">
        <nav>
            <ul class="nav-links" >
            
                <li><a href="#">HOME</a></li>
                <li><a href="#">PRODUCT</a></li>
                <li><a href="#">ABOUT</a></li>
                
            </ul>
        </nav>
        <a class="button" href="login.php"> <button>SIGN IN</button></a>
        
    </header>
    
    
   <main>



    <div class="contanier">
    <div class="main"> 
        <h1>Find your style inspiration</h1>
        <button class="main-button"><span></span>BUY NOW</button>
        <button class="main-button"><span></span>MORE INFORMATION</button>
    </div>
    </div>

    <br>
   
    
    <div class="products">

  
    <div class="container3">
            <img src="image/bag-removebg.png" alt="Women's Leather Bag" style="width: 100%; max-width: 400px; margin-bottom: 20px;">
            <h1 class="title"> Women's Leather Bag</h1>
            <p>Sale price: <span class="sale-price">$96.00</span> 
            <ul class="features">
                <li class="feature">Made of high-quality leather</li>
                <li class="feature">Spacious interior with multiple compartments</li>
                <li class="feature">Durable and stylish design</li>
                <li class="feature">Perfect for work or travel</li>
            </ul>
            <a class="cta" href="#">Order Now</a>
        </div>

        <div class="container1">
            <img src="image/rolex-png-rolex-watch-png-transparent-image-524__1_-removebg.png" alt="Women's Leather Bag" style="width: 100%; max-width: 400px; margin-bottom: 20px;">
            <h1 class="title"> Rolex Watch</h1>
            <p>Sale price: <span class="sale-price">$19600.00</span> 
            <ul class="features">
                <li class="feature">Made of high-quality leather</li>
                <li class="feature">Spacious interior with multiple compartments</li>
                <li class="feature">Durable and stylish design</li>
                <li class="feature">Perfect for work or travel</li>
            </ul>
            <a class="cta" href="#">Order Now</a>
        </div>

        <div class="container2">
            <img src="image/j1 low gs.png" alt=" Hoodie" style="width: 100%; max-width: 400px; margin-bottom: 20px;">
            <h1 class="title"> Jordan 1 Low</h1>
            <p>Sale price: <span class="sale-price">$450.00</span> 
            <ul class="features">
                <li class="feature">Made of high-quality leather</li>
                <li class="feature">Spacious interior with multiple compartments</li>
                <li class="feature">Durable and stylish design</li>
                <li class="feature">Perfect for work or travel</li>
            </ul>
            <a class="cta" href="#">Order Now</a>
        </div>

        </div>
        
</main>
   


</body>


</html>

