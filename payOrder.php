<?php include('server.php'); 
$sql1 = "SELECT * FROM concert";
$result1 = $conn->query($sql1);
$sql2 = "SELECT * FROM location";
$result2 = $conn->query($sql2);
$sql3 = "SELECT * FROM date";
$result3 = $conn->query($sql3);
$sql4 = "SELECT * FROM ticket";
$result4 = $conn->query($sql4);
$sql5 = "SELECT * FROM ticket";
$result5 = $conn->query($sql5);
$sql6 = "SELECT * FROM ticket";
$result6 = $conn->query($sql6);
$sql7 = "SELECT * FROM ticket";
$result7 = $conn->query($sql7);
$sql8 = "SELECT * FROM customer_order";
$result8 = $conn->query($sql8);



?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  

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
	        /* position:fixed; */
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
        /* p{
          font-family:verdana;
        } */
         
    </style>
    
    <title>wowTicket</title>
</head>
<body>
<table>
  <tr>
    <th><a href="loginlaew.php" style="text-decoration:none">wowTicket</th>
    <th><form class="example" action="action_page.php">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
    </form></th>
<th><div class="dropdown">   
<button class="dropbtn">PROFILE</button>
  <div class="dropdown-content">
  <a href="editprofile.php">Edit Profile</a>
  <a href="myticket.php">My Tickets</a>
  <a href="mypurchases.php">My Purchases</a>
  </div>
</div></th>
<!--    <th><input type="button" value="PROFILE"></th>-->
    <th><input type="button" value="LOG OUT"></th>
  </tr>
  </table>
 
  
  <div class="container">
  <div class="row">
  <div class="col-sm-7">
  <div class="jumbotron text-center">
  <h1 style ="display: inline;" >&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp; 
  <?php $row1 = $result1->fetch_assoc() ?>
  <?php echo $row1['Concert_Name'];?></h1>

       <img src= "image/check.png "width="20" height="20">   
        <h3 style="display: inline;">Checkout</h3>

        <img src= "image/next.png "width="15" height="15"> 
        <img src= "image/check.png "width="20" height="20">    
        <h3 style="display: inline;">Pay</h3>

        <img src= "image/next.png "width="15" height="15"> 
        <img src= "image/check-mark.png "width="25" height="25">    
        <h3 style="display: inline;">Complete</h3>
      </h1>
      <br></br>
  <h1 style ="display: inline;">&emsp;&emsp;&emsp;&emsp;&emsp;
    Order</h1>
    <h3 style="display: inline;">#</h3>
    <?php $row8 = $result8->fetch_assoc() ?>
    <?php echo $row8['CustomerOrder_ID'];?>&emsp;&emsp;&emsp;

    <!-- <h3 style="display: inline;">#10170-2003827</h3> -->
    <p style="font-family:verdana">&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
     Select Payment Method</p> 
    </div>
    
    
    <!-- &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;
     <h2 style ="display: inline;">
    <img src= "img/cr.png "width="80" height="80">   
    <Input type="radio"  id ="choice1"name ="pay " value= "credit" >
    <label for="choice1">Credit Card/Debit Card +30.00 THB</label>

    <br></br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;
     <h2 style ="display: inline;">
    <img src= "img/qr.png "width="80" height="80">   
    <Input type="radio"  id="choice2" name ="pay"  value= "qr">
    <label for="choice2">QR Code Payment +20.00 THB</label> -->
    
    

    <form>
  <div>
    &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <h2 style ="display: inline;">
    <img src= "image/credit-cards-payment.png "width="80" height="80"> 
    <input type="radio" id="payChoice1"
     name="pay" value="credit" >
    <label for="payChoice1" onelick ="location.href='payCredit.php'">Credit Card/Debit Card +30.00 THB </label>

    <br></br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;
    <h2 style ="display: inline;">
    <img src= "image/qr-code (1).png "width="80" height="80">
    <input type="radio" id="payChoice2"
     name="pay" value="qr">
    <label for="payChoice2" onelick ="location.href='payQR.php'">QR Code Payment +20.00 THB</label>
    <br></br>

  
      &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;
    <!-- <img src= "img/piccon.jpg "width="390" height="500"> -->
     <!-- <img src= "img/price.png "width="500" height="500"> -->
      <style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 12px;
  box-shadow: 0 9px #999;
}
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>
<br></br>&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;

<!-- <button class="button">Confirm Order </button> -->
<button class="button" type="button" onclick="location.href='completeOrder.php'">Confirm Order</button>

<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 12px;
  box-shadow: 0 9px #999;
}
.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>
<button class="button" type="button" onclick="location.href='cancelOrder.php'">Cancel Order</button>



   <div class="footer">
   <footer><a href="loginlaew.php"><p style="color:white; font-size:100%;">wowTicket</p></footer>
   <footer><a href="https://www.youtube.com/watch?v=SpEJOo2mLfQ"><p style="color:white; font-size:16px; font-weight: normal;">help</p></footer>
   <footer><a href="https://www.youtube.com/watch?v=6c8tqsfZg6s"><p style="color:white; font-size:16px; font-weight: normal;">Support</p></footer>
    </div>
</body>

</html>
