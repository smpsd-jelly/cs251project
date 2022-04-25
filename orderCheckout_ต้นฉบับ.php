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
    <!-- <link href="form.css"> -->
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
          .gallery{
        display: flex;
        }
        figure{
        width: 200px;
        }
        figure img{
        width: 100%;
        }
        
  .normal {
          font-weight: normal;
          }
 
         
    </style>
      <style>
        .aligned {
            display: flex;
            align-items: top;
        }
           
        span {
            padding: 10px;
        }
    </style>


    <title>wowTicket</title>
</head>
<body>

 <table>
  <tr>
    <th><a href="loginlaew.php" style="text-decoration:none">wowTicket</th>
    <th><form class="example" action="finding.php" method="GET">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"  value="Search" ><i class="fa fa-search"><a href= "finding.php"></a></i></button>
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
        <img src= "image/check-mark.png "width="25" height="25">    
        <h3 style="display: inline;">Pay</h3>

        <img src= "image/next.png "width="15" height="15"> 
        <img src= "image/check-mark.png "width="25" height="25">    
        <h3 style="display: inline;">Complete</h3>
      </h1>
          <br></br>
  <h1 style ="display: inline;" >&emsp;&emsp;&emsp;&emsp;&emsp;
    Order Summary</h1>
    <h3 style="display: inline;">#</h3>
    <?php $row8 = $result8->fetch_assoc() ?>
    <?php echo $row8['CustomerOrder_ID'];?>&emsp;&emsp;&emsp;
    <!-- <h3 style="display: inline;">#10170-2003827</h3> -->
    </div>

  
  <div class="aligned">
  &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;
  <img src= "image\all2.jpg"width="390" height="500" alt="">
        <span> <h3 style ="display: inline;"></h3>
        <?php $row2 = $result1->fetch_assoc() ?>
         <?php echo $row1['Concert_Name'];?><br>
      

        <h3 style ="display: inline;"></h3> 
        <h3 style ="display: inline;"></h3> 
        <?php $row3 = $result3->fetch_assoc() ?>
         <?php echo $row3['Date'];?>

        <img style ="display: inline;" src= "image/map-locator.png "width="20" height="20" alt="">  
        <?php $row2 = $result2->fetch_assoc() ?>
         <?php echo $row2['Location_Name'];?><br>

        <!-- <h3 style ="display: inline;">Union Hall Floor6,</h3>
        <h3 style ="display: inline;">Union Mall</h3> -->
        <hr width=100% size=3 color=770088> 

        <!-- <div class="input-group">
            <label for = "Concert_Name"> GeneLabCon Weekend </label>
            <input type ="text" name ="Concert_Name">
            </div> กล่องกรอกข้อมูล -->





        <span> <h5 style ="display: inline;">Info</h5>&emsp;&emsp;&emsp;
        <h5 style ="display: inline;">Ticket Type</h5>&emsp;&emsp;&emsp;
        <h5 style ="display: inline;">Price</h5> &emsp;&emsp;&emsp;
        <h5 style ="display: inline;">Free</h5>&emsp;&emsp;&emsp;
        <h5 style ="display: inline;">Quantity</h5>
        <hr width=100% size=3 color=770088> 

        <?php $row4 = $result4->fetch_assoc() ?>
        <span> <h4 style ="display: inline;">Zone</h4>
         <?php echo $row4['Zone'];?>

        <h4 style ="display: inline;"></h4>&emsp;&emsp;
        <?php $row6 = $result6->fetch_assoc() ?>
         <?php echo $row6['TicketType'];?>&emsp;&emsp;

        <h4 style ="display: inline;"></h4> 
        <?php $row7 = $result7->fetch_assoc() ?>
         <?php echo $row7['Price'];?>&emsp;&emsp;&emsp;

        <h4 style ="display: inline;">฿20</h4>&emsp;&emsp;&emsp;

        <h4 style ="display: inline;">1</h4><br>
      

        <h4  style ="display: inline;"  >SeatNo.</h4>
        <?php $row5 = $result5->fetch_assoc() ?>
         <?php echo $row5['SeatNum'];?><br>
        <hr width=100% size=3 color=770088> 
       

        &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;&emsp;&emsp;&emsp;
        &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&emsp;&emsp;
        <span> <h4 style ="display: inline;">TOTAL</h4>&emsp;&emsp;&emsp;
        <?php $x = $row7['Price'];
            $x += 20;
        ?>
        <h4 style ="display: inline;">฿ <?php echo $x;?></h4>&emsp;&emsp;&emsp;
        

    <!-- </form> -->
        </span><br><br>
        &emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
    <!-- <img src= "img/piccon.jpg "width="390" height="500"> -->
     <!-- <img src= "img/price.png "width="500" height="500"> -->
      <style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
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
<!-- <button class="button">Confirm Order </button> -->
<button class="button" type="button" onclick="location.href='payOrder.php'">Confirm Order</button>
&emsp;&emsp;&emsp;&emsp;
<style>
.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 18px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
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
<button class="button" type="button" onclick=" location.href='cancelOrder.php'">Cancel Order</button>
</div>

</tbody>
    <div class="footer">
   <footer><a href="loginlaew.php"><h2><p style="color:white;">wowTicket</p></h3></footer>
   <footer><a href="contact.php"><p style="color:white;">help</p></footer>
   <footer><a href="contact.php"><p style="color:white;">Support</p></footer>
    </div> 
    
    
</body>
</html>
