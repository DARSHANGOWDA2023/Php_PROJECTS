<?php
session_start();
?>


<!doctype html>
<html>
<head>
    <title>Home Page</title>
    <style type="text/css">
        body{
            background-color:#18183b;
            
        }
			#scroll{
				 background-color:white;
				font-family:georgia;
				color:black;
               text-align: center;  
                 margin-right:200px;
				margin-left:200px;
				border-radius:15px;
                text-shadow: 2px 2px 3.5px #000000;
			}
        a{
            color:white;
        }
        #para{
            font-family:sans-serif;
            font-size: 20px;
            margin: 10px;
            padding-right: 700px;
            color: white;
        }                                      
        #link{
            float:right;
            color:white;
        }
        #img{
            position:relative;
            left:800px;
            bottom:630px;

        }
        select{
            background-color:white;
            border-radius: 20px;
        }
        .cus{
            font-family: cursive;
        }
            
    </style>    
</head>

<body>
		<div id="scroll">
		<h1>TRAVEL AGENCY</h1>
		</div>
    
        <div id="link">
      <a href="home.php" style="padding: 15px;"><b>HOME</b></a>
            <b>LOGIN AS:</b>
            <select name="forma" onchange="location = this.value;">
                <option></option>
           <option value="login.php">USER</option>
            <option value="admin.php">ADMIN</option>    
           <option value="tr-login.php"> TRAVEL AGENCY</option>
                </select>
            <a href="user-details.php" style="padding: 15px;"><b>SIGN UP</b></a>
            
       
        </div>
    
    
    <div id="para">
    <br><b><u>INTRODUCTION:</u></b><br><br>
        <div class="cus">
        The TRAVEL AGENCY is a web based application. The main purpose of “Online Tours and travels ” is to provide a convenient way for a customer to book  flight, train and bus for tour purposes. The objective of this project is to develop a system that automates the processes and activities of a travel agency. In this project, we will make an easier task of searching places and for booking train, flight or bus. . In the present system a user has to approach various admin to find details of places and to book tickets. We provide approach skills to critically examine how a tourist visits and its ability to operate in an appropriate way when dealing with the consequences of tourism, locally, regionally, and nationally including visitor security and ecological influences. It is important for a customer to plan a particular journey and have it executed properly. The project ‘Tours and Travels Management System’ is developed to replace the currently existing system, which helps in keeping records of the customer details of destination as well as payment received.
            </div>
            <p></p><br><b><u>OBJECTIVES:</u></b><br><br>
        <div class="cus">
        objective of theTRAVEL AGENCY project is to develop a system that automates the processes and activities of a travel and the purpose is to design a system using which one can perform all operations related to traveling.
            </div>
    </div>
    
       <div id="img">
         <p></p>
           <p> <img src="mane2.png" width="580px" height="530px" style="margin: 20px"></p>
    
    </div>
    
</body>
</html>
