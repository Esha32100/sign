<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transport management system</title>
    <link rel="icon" type="image/x-icon" href="/images/favicon.ico">
    <script>
       function book() 
       {
        
        alert("successfully Booked! ");
       }
    </script>
    <style>
    *
{
	padding: 0;
	margin: 0;
}
    nav
{
	position: fixed;
	background-color: #65554a;
	height: 70px;
	width: 100%;
	z-index: 1;
}
    ul
{
	position: relative;
	float: right;
	margin-right: 20px;

}
ul li
{
	display: inline-block;
	line-height: 70px;
	margin: 0 5px;
}
ul li a{
text-decoration: none;
color: white;
font-size: 17px;

}
.wel{
    color:white;
    margin:60px;
    position:relative;
    font-size:20px;
    top:30%;

}
.pick{
    width: 100%;
    height: 700px;
}
.pp{
    width: 100%;
    height: 100%;

}
body{
   background:url(best.png);
   background-repeat:no-repeat;
   background-attachment:fixed;
   background-size:100%;
   
   }
   
   .list:hover{
       background-color:#978d85;
       color:1s;
   }
   .div1{
    width: 310px;
    height: 550px;
    background:linear-gradiant(to top,rgba(0,0,0,0.8)50%,rgba(0,0,0,0.8)50%);
    position:absolute;
    border-radius:30px;
    background-color:#65554a;
    margin-top: 28px;
    text-align:center;
    margin-left:69px;
    margin-top:108px;
    padding-top:29px;
    padding-right:39px;
    padding-bottom:19px;
    padding-left:19px;
    

   }
   .login{
    padding-left:30px;
    color:white;
   }
   .hun{
    padding-top:100px;
    height: 200px;
    
   
   }
   input{
    margin-top:30px;
    padding-left:20px;
    padding-right:65px;
    padding-bottom:13px;
    padding-top:14px;
    border-radius:10px;

   }
   label{
    color:white;
    font:bold;
   }
   .book{
    padding-top:17px;
    padding-bottom:17px;
    width: 320px;
    padding-left:30px;
    font-size:20px;
    border-radius:20px;
    color:white;
    background-color:#978d85;
    margin:29px;
    margin-left:15px;
   }
   .book:hover{
       background-color:#978d85;
       color:1s;
       font-size:23px;
       cursor:pointer;
   }
    </style>
</head>
<body  >
    <nav>
        <label class="wel">WELCOME  IN  TRANSPORT  MANAGEMENT  SYSTEM</label>
        <ul>
       <li > <a  class="list"href="transport.php">Home</a></li>
       <li > <a  class="list"href="features.php">Features</a></li>
       <li > <a  class="list"href="about.php">About</a></li>
       <li > <a  class="list"href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <!-- <h1 class="hun">WE GOES TO ANYWHERE CITY IN ALL <span>INDIA </span></h1> -->
    <div class="div1">
        <!-- <img class="pick"src="nnn.png" alt="img"> -->
        <form  action="book.php" method ="POST">
            <h2 class="login">Book Here</h2>
            <label >Name</label>
            <input id=name name="name" class="input" type="text"placeholder="Enter your name"><br>
            <label >Number</label>
            <input name=number class="input"type="number"placeholder="Enter your phone number">
            <label >From</label>
            <input name=from class="input" type="text"placeholder="Enter your source (from)"><br>
            <label >To</label>
            <input name=to class="input" type="text"placeholder="Enter your Destinatiom (to)"><br>
            <label >Vehicle</label>
            <input  name=vehicle class="input" type="text"placeholder="Enter your Vehicle"><br>
            <!-- <input class="book" type="button" value="BOOK NOW !" > -->
             <button class="book" value="BOOK NOW !" >BOOK NOW !</button>
            <!-- onclick="book()" -->
        </form> 
    </div>
    
</body>

</html>