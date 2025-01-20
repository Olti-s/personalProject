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
    color:#0088a9;
}

button{
    padding: 9px 25px;
   background-color:#123793;
   border: none;
   border-radius: 50px;
   transition: all 0,3s ease 0s;
   cursor: pointer;
   
}

button:hover{
    background-color:#123793;
}


.main{
    width: 100%;
    position: absolute;
    text-align: center;
    color: #fff;
    background-image:;
   
    height: 100%;

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
    color: #fff;
    background: transparent;
    border: 2px solid #123793;
    font-weight: bold;
    border-radius: 25px;
    margin: 0;

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
</main>
   


</body>


</html>

