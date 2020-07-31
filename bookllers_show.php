<?php
include("database_con.php");
// session_start();
 
?>
<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Acme' rel='stylesheet'>
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    
	 <style>
		body{
			max-width: 100%;
			height: 600px;
			background-image: url("book.jpg");
			background-size: 100% 100%;
		}
		.h1{
			
			color: white;
			margin-top: 0;
			padding-left:52%;
			padding-bottom: 1%;
			margin-left: 5px;
			margin-right: 5px;
			font-family: 'Acme';
			font-size: 50px;
		}
		.h2{color:white;
			margin-top: 2px;
			padding-left: 12px;
			padding-bottom: 1px;
			margin-left: 5px;
			margin-right: 5px;
			font-family: 'Acme';
			font-size: 20px;
		}
		.button{
			font-size: 20px;
		}
		.button1{width: 300px;
		         height: 50px;
		         padding-bottom: 2px;
		         max-width: 90%;
		     }
		.button2{width: 300px;
		         height: 50px;
		         padding-bottom: 2px;
		         max-width: 90%;
		     }
	</style>
</head>
<body oncontextmenu="return false;">


  <div class="h1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <a style="text-decoration: none;" href="create_bookllers.php"><button class="button button1">Create</button></a>&nbsp;&nbsp;&nbsp;

 <a style="text-decoration: none;" href="bookllers_login.php"><button class="button button2">Login</button></a>









  </div>
  <DIV>
    	
<marquee behavior="alternate" class="h2">WELCOME TO BOOK-SELLING WEBISTE FOR JUIT</marquee>
  </DIV>
  

</body>

</html>