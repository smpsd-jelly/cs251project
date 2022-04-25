<?php 
   
    include('server.php'); 
    
?>
<?php 
   
   $sql = "SELECT * FROM concert";
   $result = $conn->query($sql);
   $sql1 = "SELECT * FROM ticket";
   $result1 = $conn->query($sql1);
   $sql2 = "SELECT * FROM date";
   $result2 = $conn->query($sql2);
   $sql3 = "SELECT * FROM location";
   $result3 = $conn->query($sql3);
   $sql4 = "SELECT * FROM ticket";
   $result4 = $conn->query($sql4);
   $sql5 = "SELECT * FROM buying";
   $result5 = $conn->query($sql5);
   session_start();
   if (!isset($_SESSION['username'])) {
      $_SESSION['msg'] = "You must log in first";
      header('location: login.php');
  }

  if (isset($_GET['logout'])) {
      session_destroy();
      unset($_SESSION['username']);
      header('location: login.php');
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Prompt:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body{
            font-family: 'Montserrat', sans-serif;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }

        h1,h2,h3{
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }

        .header{
            width: 100.0%;
            height: 20.0%;
            position: absolute;
            background-color: #C1C1C1;
            font-size: 35px;
        }

        table {
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
            border-collapse: collapse;
            width: 100.0%;
        }

        td, th {
            border-collapse: collapse;
            text-align: center;
            font-size: 35px;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        .footer {
            width: 100.0%;
            height:170px;
	        /*position:fixed;*/
	        bottom:0px;
            background-color: black;
            text-align: left;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }       
        .dropbtn {
            background-color: black;
            color: white;
            padding: 16px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            font-family: 'Open Sans', sans-serif;
            font-family: 'Prompt', sans-serif;
            font-size: 16px;
        }

        .dropdown-content a:hover {background-color: #f1f1f1}

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #3e8e41;
        }
 
    
    h4 {
        font-family: 'Montserrat', sans-serif;
        font-size: 35px;
        }
    h5 {
        color: #b6b6b6;
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
        
        }
        h6 {
        color: #b6b6b6;
        font-size: 18px;
        font-family: 'Montserrat', sans-serif;
        text-align: center;
        
        }
        .box {
            float: center;
            width: 50%;
            margin:auto;
            }

    .button {
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 10px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size:16px;
        margin: 4px 2px;
        cursor: pointer;
        } 
        .button2 {background-color: #008CBA;}    
        *{
  box-sizing: border-box;
}



/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 900px; /* Should be removed. Only for demonstration */
}
.column2 {
  float: center;
  width: 50%;
  padding: 10px;
  height: 100px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.block-0 {
	
	height: 50px;
	background: #0E9F98;
	margin:auto;
}
.block-1 {
	width: 75px;
	height: 130px;
	background: #00BFFF;
	float: left;
    margin: 7px;
}
.block-2 {
	
	height: 100px;
	margin: 7px;
	background: #FFFF33;
    float: auto;
	
}
.block-3 {
	width: 75px;
	height: 130px;
	margin: 7px;
	background:	#FF0000 ;
	float: left;
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 75%;
  height: 95%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.buy {
               display: block;
               width: 230px;
               font-size: 28px;
               font-weight: bold;
               background-color: #878787;
               padding: 0 18px;
               line-height: 40px;
               border-radius: 15px;
               color: #fff;
               text-decoration: none;
               text-align: center;
               
            }

            
            .seatSelection {
  text-align: center;
  padding: 5px;
	margin: 15px;}

.seatsReceipt {text-align: center;}

.seatNumber {
	display: inline;
	padding: 10px;
	background-color: #5c86eb;
	color: #FFF;
	border-radius: 5px;
	cursor: default;
	height: 25px;
	width: 25px;
	line-height: 25px;
	text-align: center;
 }

.seatRow {padding: 10px;}

.seatSelected {
	background-color: lightgreen;
	color: black;
 }

.seatUnavailable {background-color: gray;}

.seatRowNumber {
	clear: none;
	display: inline;
 }

.hidden {display: none;}

.seatsAmount {max-width: 2em;}



    </style>
    
    <title>wowTicket</title>
</head>
<body>
<table>
  <tr>
    <th><a href="loginlaew.php"style="text-decoration:none ">wowTicket</th>
    <th><form class="example" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form></th>
    <th><div class="dropdown">  
        <!-- logged in user information -->
        <button class="dropbtn">PROFILE</button>
        <div class="dropdown-content">
        <a href="editprofile.php">Edit Profile</a>
        <a href="myticket.php">My Tickets</a>
        <a href="mypurchases.php">My Purchases</a>
        </div>
        <?php if (isset($_SESSION['username'])) : ?>
        
        <span style="font-size:15px;color:#B2B2B2; font-weight:normal;">&emsp;
              Welcome <strong><?php echo $_SESSION['username']; ?></strong>
                <!-- <p><a href="loginlaew.php?logout='1'" style="color: red;">Logout</a></p> -->
        <?php endif ?>
    </div></th>
    <th><a href="yangmaidailogin.php"><input type="button" value="LOG OUT"></th>
  </tr>
  </table>
  <?php $row = $result->fetch_assoc() ?>
  <?php $row1 = $result1->fetch_assoc() ?>

  <h4 style="text-indent: 5em;"><?php echo $row['Concert_Name']; ?>&nbsp;&nbsp;&nbsp; <button class="button"onclick="location.href='detailticket.php'">MORE DETAIL</button></h4>
    <div class="row">
    <div class="column" style="background-color: white;">
        <p style="text-indent: 9em;">&nbsp;&nbsp;&nbsp;<img id="myBtn" src="image/zone.jpg "></p>
    </div>
    
    <div class="column" style="background-color:white;">
       <br /><br /><br /><br /><br /><br />
        <img src="image/ticprics.png " width="300" height="200">
        <p style="margin-left:35px" class="buy" onclick="location.href='seat.php'">Click to Select Zone</p>
         

           
                       
            
                        
                </div>

         </div>
         
    </div>

 </div>
                
                
        
    </div>
    
    </div>


    

    <div style ="height:200px"> </div>
    
    
    <div class="footer">
   <footer><a href="loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="contact.php"><p style="color:white;">help</p></footer>
   <footer><a href="contact.php"><p style="color:white;">Support</p></footer>
    </div>>
    
</body>
</html>